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

Route::get('/v1/hello', 'HelloController@index');

Route::get('/v1/hello/var', 'HelloController@varindex');

Route::get('/v1/hello/str-implode', 'HelloController@strImplode');

Route::get('/v1/hello/array2', 'HelloController@arr2');

Route::get('/v1/hello/foreach', 'HelloController@foreach');

Route::get('/v1/hello/name', 'HelloController@name');

Route::get('/v1/hello/unset', 'HelloController@unset');

Route::get('/v1/hello/mazime', 'HelloController@mazime');

Route::get('/v1/hello/aisatu', 'HelloController@aisatu');
Route::get('/v1/hello/aisatu2', 'HelloController@identity');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
