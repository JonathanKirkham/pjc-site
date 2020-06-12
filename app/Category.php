<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['user_id', 'thumbnail', 'name', 'slug', 'is_published'];

    function user() {
        return $this->belongsTo(User::class);
    }

    function post() {
        return $this->belongsToMany(Post::class, 'category_posts');
    }
}
