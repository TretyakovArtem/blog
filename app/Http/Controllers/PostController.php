<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function getPosts() {
        $posts = Post::with('tags')->get();
        $lastPosts = Post::all()->take(4);


        if (view()->exists('site.index')) {
            return view('site.index', [
                'posts' => $posts,
                'lastPosts' => $lastPosts
            ]);
        }
        abort(404);
    }


    function getPost($id) {
        $data = Post::find($id);

        $post = [
            'name' => $data->name,
            'text' => $data->text,
            'img'  => $data->url
        ];

        return view('site.post', $post);
    }
}
