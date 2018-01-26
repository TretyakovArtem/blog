<?php

namespace App\Http\Controllers\Admin\Posts;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DeletePostController extends Controller
{

    function delete($id){

        $data = Post::find($id);

        $data->delete();

        return redirect('admin');
    }

}
