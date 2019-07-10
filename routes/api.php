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
Route::get('restaurants','restaurantController@index');
Route::get('restaurant/{id}','restaurantController@show');
Route::post('restaurant','restaurantController@store');
Route::put('restaurant/{id}','restaurantController@update');
Route::delete('restaurant/{id}','restaurantController@delete');

Route::get('reservations','reservationController@index');
Route::get('reservation/{id}','reservationController@show');
Route::post('reservation','reservationController@store');
Route::put('reservation/{id}','reservationController@update');
Route::delete('reservation/{id}','reservationController@delete');

Route::apiResources(['user'=>'UserController']);
Route::get('profile','UserController@profile');
Route::put('profile','UserController@updateprofile');
Route::post('register','UserController@register');