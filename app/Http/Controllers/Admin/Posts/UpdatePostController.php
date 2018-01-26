<?php

namespace App\Http\Controllers\Admin\Posts;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;


class UpdatePostController extends Controller
{
    function update(Request $request, $id){
        if($request->isMethod('post')) {
            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'text' => 'required',
                'image' => 'required|file'
            ]);

            $post = Post::find($id);

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


    function show($id){

    	$data = Post::find($id);

    	$post = [
            'name' => $data->name,
            'text' => $data->text,
            'img'  => $data->url,
            'id'   => $data->id
        ];


        return view('admin.update', $post);
    }
}
