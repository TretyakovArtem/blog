<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function getPosts() {
        $posts = Post::all();

        if (view()->exists('admin.index')) {
            return view('admin.index', ['posts' => $posts]);
        }

        abort(404);
    }
}
