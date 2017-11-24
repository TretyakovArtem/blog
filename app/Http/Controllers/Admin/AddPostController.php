<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AddPostController extends Controller
{

    function create(Request $request){
        if($request->isMethod('post')) {
            $input = $request->except('token');

            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'text' => 'required'
            ]);

            $post = new Post;

            $post->name = $input->name;

            $post->save();

        }

        return view('admin.list');

    }



    function show(){
        return view('admin.list');
    }


}
