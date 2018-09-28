<?php

use Illuminate\Http\Request;

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
Route::get('messages', 'MessagesController@index');
Route::get('message/{id}', 'MessagesController@show');
Route::post('messages', 'MessagesController@create');
Route::put('messages', 'MessagesController@store');
Route::delete('message/{id}', 'MessagesController@destroy');
