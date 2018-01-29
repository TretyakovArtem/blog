<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function show(Request $request) {
        return view('site.contacts');
    }


    public function store(Request $request) {
        if($request->isMethod('post')) {
             $messages = [];
             $validator = Validator::make($request->all(), [
                 'name'=>'required'
             ], $messages);
             if($validator->fails()) {
                 return redirect()->route('contact')->withErrors($validator)->withInput();
             }

             $name = $request->name;
             $email = $request->email;
             $text = $request->text;

             Mail::to(env('MAIL_RECIPIENT'))->send(new Contact($name, $email, $text));
        }

        return view('site.contacts');
    }
}
