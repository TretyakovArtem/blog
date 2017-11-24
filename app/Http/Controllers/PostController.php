<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function getPosts() {
        $posts = Post::all();

        if (view()->exists('site.index')) {
            return view('site.index', ['posts' => $posts]);
        }

        abort(404);
    }


    function getPost($id) {
        $data = Post::find($id);

        $post = [
            'name' => $data->name,
            'text' => $data->text
        ];

        return view('site.post', $post);
    }
}
