<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Arr;

class News extends Model
{
    use HasFactory, Sluggable;


    protected $guarded = ['id'];
    protected $with = ['categoryprogram', 'user'];

    public function scopeFilter($query, array $filters)
    {
        // if (request('search')) {
        //     $query->where('title', 'like', '%' . request('search') . '%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('categoryprogram', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when(
            $filters['user'] ?? false,
            fn ($query, $user) =>  $query->whereHas('user',fn ($query) => $query->where('username', $user))
        );
       
    }

    public function categoryprogram()
    {
        return $this->belongsTo(Categoryprogram::class);
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
