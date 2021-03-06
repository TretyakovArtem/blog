<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class AddPostController extends Controller
{

    function create(Request $request){
        if($request->isMethod('post')) {
            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'text' => 'required',
                'image' => 'required|file'
            ]);

            $post = new Post;

            $post->name = $input['name'];
            $post->text = $input['text'];

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                Image::make($file->getRealPath())->resize(360,203)->save();
                $input['image'] = $file->getClientOriginalName();
                $post->url = $input['image'];
                $file->move(public_path() . '/assets/img', $input['image']);
            }

            $post->save();
        }

        return redirect('admin');

    }

    function show(){
        return view('admin.posts.list');
    }

}
