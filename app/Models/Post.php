<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";



    public function tags()
    {
        return $this->hasMany(Tag::class, '');
    }
}
