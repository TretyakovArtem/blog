<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function comments()
    {
        return $this->belongsTo(Comment::class, 'post_id');
    }

    public function likes()
    {
        return $this->belongsTo(Like::class, 'post_id');
    }
}
