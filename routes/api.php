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

Route::middleware('jwt')->post('todos', 'TodoController@store');


Route::post('/login', 'Auth\LoginController@authenticate');

Route::middleware('jwt')->get('todos', 'UserController@getUserTodos');
Route::middleware('jwt')->get('todos/{id}', 'TodoController@show');
Route::middleware('jwt')->delete('todos/{id}', 'TodoController@destroy');
Route::middleware('jwt')->put('todos/{id}', 'TodoController@update');
