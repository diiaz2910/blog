<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    //One To Many relationship 
    public function Post()
    {
        return $this->hasMany(Post::class);
    }
}
