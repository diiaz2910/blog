<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','color'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    //Many To Many Relationships (tags to post)
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
