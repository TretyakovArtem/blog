<?php


namespace App\Http\Controllers\Admin\Posts;


use App\Models\Tag;
use App\Http\Controllers\Controller;

class DeleteTagController extends Controller
{

    function delete($id){

        $data = Tag::find($id);

        $data->delete();

        return redirect('admin.tag.list');
    }

}
