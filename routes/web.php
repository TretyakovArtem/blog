<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', ['uses' => 'PostController@getPosts', 'as'=>'posts']);
Route::get('/posts/{id}', ['uses' => 'PostController@getPost', 'as'=>'post']);



Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], function() {
    Route::get('/', ['uses' => 'Admin\AdminController@getPosts', 'as'=>'list']);
    Route::get('/post/add', ['uses'=>'Admin\AddPostController@show', 'as'=>'admin_add_post']);
    Route::post('/post/add', ['uses'=>'Admin\AddPostController@create', 'as'=>'admin_add_post_p']);
    Route::get('/post/{id}/edit', ['uses'=>'Admin\UpdatePostController@show', 'as'=>'admin_edit_post']);

    Route::get('/post/{id}/delete', ['uses'=>'Admin\DeletePostController@delete', 'as'=>'admin_delete_post']);

    Route::post('/post/{id}/edit', ['uses'=>'Admin\UpdatePostController@update', 'as'=>'admin_edit_post_p']);
    Route::get('/posts', ['uses'=>'Admin\AdminController@getPosts', 'as'=>'admin_posts']);
});

Auth::routes();
