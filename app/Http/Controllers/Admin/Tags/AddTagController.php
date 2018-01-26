<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddTagController extends Controller
{

    function create(Request $request){
        if($request->isMethod('post')) {
            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'title' => 'required|max:255'
            ]);

            $tag = new Tag();
            $tag->title = $input['title'];

            $tag->save();
        }

        return redirect('admin.tag.list');

    }

    function show(){
        return view('admin.tag.list');
    }

}
