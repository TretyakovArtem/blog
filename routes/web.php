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

Route::get('/admin', ['uses' => 'AdminController@postsList', 'as'=>'list']);

Route::group(['prefix'=>'admin'], function() {
    Route::get('/add/post', ['uses'=>'Admin\AddPostController@show', 'as'=>'admin_add_post']);
    Route::post('/add/post', ['uses'=>'Admin\AddPostController@create', 'as'=>'admin_add_post_p']);
});
