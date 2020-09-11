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

// Route::get('/todos', 'APIController@index');
Route::Post('/formSubmit','RegisterController@store');
Route::Post('/login','RegisterController@login');

Route::get("fetch",'RegisterController@index');

Route::get('/test',function(){
    return ['name' =>"shakhawat"];
});

