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

Route::get('/posts', 'MyController@index');

Route::get('/comments', 'MyController@indexComments');

Route::get('/comments/create', 'MyController@createComments') -> name('comment.create');
Route::post('/comments/store', 'MyController@storeComments') -> name('comment.store');

Route::get('/posts/create', 'MyController@createPosts') -> name('post.create');
Route::post('/posts/store', 'MyController@storePosts') -> name('post.store');

Route::get('/posts/edit/{id}', 'MyController@editPost') -> name('post.edit');
Route::post('/posts/update/{id}', 'MyController@updatePost') -> name('post.update');

Route::get('/posts/destroy/{id}', 'MyController@destroyPost') -> name('post.destroy');