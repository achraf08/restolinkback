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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::apiResources(['restaurants'=>'restaurantController']);
//Route::apiResources(['reservations'=>'restaurantController']);

/*
Route::get('restaurants','restaurantController@index');
Route::get('restaurant/{id}','restaurantController@show');
Route::post('restaurant','restaurantController@store');
Route::put('restaurant/{id}','restaurantController@update');
Route::delete('restaurant/{id}','restaurantController@delete');
*/

Route::get('reservations','reservationController@index');
Route::get('reservation/{id}','reservationController@show');
Route::post('reservation','reservationController@store');
Route::put('reservation/{id}','reservationController@update');
Route::delete('reservation/{id}','reservationController@delete');

Route::get('tables','tableController@index');
Route::get('table/{id}','tableController@show');
Route::post('table','tableController@store');
Route::put('table/{id}','tableController@update');
Route::delete('table/{id}','tableController@delete');

Route::get('rooms','roomController@index');
Route::get('room/{id}','roomController@show');
Route::post('room','roomController@store');
Route::put('room/{id}','roomController@update');
Route::delete('room/{id}','roomController@delete');