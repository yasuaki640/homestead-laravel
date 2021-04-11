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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user', 'App\Http\Controllers\UserController@register');
Route::get('/user/{id}', 'App\Http\Controllers\UserController@getById');

Route::post('/post', 'App\Http\Controllers\PostController@post');
Route::get('/post', 'App\Http\Controllers\PostController@list');

