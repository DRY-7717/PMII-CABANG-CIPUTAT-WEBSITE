<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Categoryprogram extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function award()
    {
        return $this->hasMany(Award::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
}
