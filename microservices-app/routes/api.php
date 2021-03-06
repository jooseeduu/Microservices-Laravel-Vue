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

Route::get( 'hello' , function(){

	return 'Hello';



});

Route::get( 'users' , 'UserController@index');
Route::get( 'users/{id}' , 'UserController@show');
Route::post('users' , 'UserController@store');
Route::put('users/{id}' , 'UserController@update');
Route::delete('users/{id}' , 'UserController@destroy');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
