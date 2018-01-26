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

    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', ['uses'=>'Admin\Posts\AdminController@getPosts', 'as'=>'admin_posts']);
        Route::get('/add', ['uses'=>'Admin\Posts\AddPostController@show', 'as'=>'admin_add_post']);
        Route::post('/add', ['uses'=>'Admin\Posts\AddPostController@create', 'as'=>'admin_add_post_p']);
        Route::get('/{id}/edit', ['uses'=>'Admin\Posts\UpdatePostController@show', 'as'=>'admin_edit_post']);
        Route::post('/{id}/edit', ['uses'=>'Admin\Posts\UpdatePostController@update', 'as'=>'admin_edit_post_p']);
        Route::get('/{id}/delete', ['uses'=>'Admin\Posts\DeletePostController@delete', 'as'=>'admin_delete_post']);
    });

    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', ['uses'=>'Admin\Tags\AddTagController@show', 'as'=>'admin_tags']);
        Route::get('/add', ['uses'=>'Admin\Tags\AddTagController@show', 'as'=>'admin_add_tag']);
        Route::post('/add', ['uses'=>'Admin\Tags\AddTagController@create', 'as'=>'admin_add_tag_p']);
        Route::get('/{id}/edit', ['uses'=>'Admin\Tags\UpdateTagController@show', 'as'=>'admin_edit_tag']);
        Route::post('/{id}/edit', ['uses'=>'Admin\Tags\UpdateTagController@update', 'as'=>'admin_edit_tag_p']);
        Route::get('/{id}/delete', ['uses'=>'Admin\Tags\DeleteTagController@delete', 'as'=>'admin_delete_tag']);
    });

});

Auth::routes();
