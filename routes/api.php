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


//端末 API KEY 生成
Route::post('/v1/key', 'Api\KeyController@generate');

Route::get('/v1/user', 'Api\UserController@show');

Route::patch('/v1/user', 'Api\UserController@update');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
