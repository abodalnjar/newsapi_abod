<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('authors', 'App\Http\Controllers\Api\UserController@index');
Route::get('authors/{id}' , 'App\Http\Controllers\Api\UserController@show');
Route::get('posts/authors/{id}','App\Http\Controllers\Api\UserController@posts');
Route::get('comments/authors/{id}','App\Http\Controllers\Api\UserController@comments');

// end user related
/**
 * @post
 */

Route::get('caregories','App\Http\Controllers\Api\UserController@index');
Route::get('posts/caregories/{id}','App\Http\Controllers\Api\UserController@posts');
Route::get('posts','App\Http\Controllers\Api\PostController@index');
Route::get('posts/{id}','App\Http\Controllers\Api\PostController@show');
Route::get('comments/posts/{id}','App\Http\Controllers\Api\PostController@comments');

// End post related
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
