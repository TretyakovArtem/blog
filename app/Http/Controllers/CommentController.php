<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{

    public function store(Request $request) {
        if($request->isMethod('post')) {
             $messages = [];
             $validator = Validator::make($request->all(), [
                 'author'=>'required'
             ], $messages);

             if($validator->fails()) {
                 return redirect()->route('contacts')->withErrors($validator)->withInput();
             }

             $post = $request->post_id;

             $comment = new Comment();
             $comment->author = $request->author;
             $comment->text = $request->text;
             $post->comments()->save();
        }

        return view('site.contacts');
    }
}
