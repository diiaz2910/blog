<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    
    //One To Many (Inverse) / Belongs To User
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    //One To Many (Inverse) / Belongs To Category
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    //Many To Many Relationships (posts to tags)
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relationship One To One (Polymorphic)
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
