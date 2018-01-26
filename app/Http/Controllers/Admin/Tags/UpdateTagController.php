<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class UpdateTagController extends Controller
{
    function update(Request $request, $id){
        if($request->isMethod('post')) {
            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'title' => 'required|max:255'
            ]);

            $tag = Tag::find($id);
            $tag->title = $input['title'];
            $tag->save();
        }

        return redirect('admin.tag.list');

    }


    function show($id){

    	$tag = Tag::find($id);

    	$tag = [
            'title' => $tag->title
        ];

        return view('admin.tag.update', $tag);
    }
}
