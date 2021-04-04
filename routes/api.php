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

//Public routes

//Routes for authenticated users only
Route::group(['middleware' =>['auth:api']], function(){

});

//Routes for guest only
Route::group(['middleware'=>['guest:api']], function(){
    Route::post('register', 'Auth\RegisterController@register');
});
