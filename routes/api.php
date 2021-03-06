<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts/latest', 'PostController@getPostsDesc')->name('get-posts-desc');

Route::get('/posts/archive', 'PostController@getPostsAsc')->name('get-posts-asc');

Route::post('/post', 'PostController@savePost')->name('save-post');

Route::get('/post/{id}', 'PostController@getPost')->name('get-post');

Route::get('/me', 'UserController@getUserDetail')->name('get-user');

Route::post('/register', 'UserController@registerUser')->name('register-user');

Route::post('/login', 'UserController@loginUser')->name('login-user');
