<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Product extends Model
{
    use HasFactory,Sluggable;

    protected $guarded = ['id'];
    protected $with = ['categoryproduct'];
    public function scopeFilter($query, array $filters)
    {
        // if (request('search')) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // } 

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
                ->orWhere('produsen', 'like', '%' . $search . '%')
                ;
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('categoryproduct', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
        $query->when(
            $filters['user'] ?? false,
            fn ($query, $user) =>
            $query->whereHas(
                'user',
                fn ($query) =>
                $query->where('username', $user)
            )
        );

        
        
    }
    
    public function categoryproduct()
    {
        return $this->belongsTo(Categoryproduct::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
