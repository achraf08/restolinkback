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
Route::group(['middleware' => 'cors'], function(){
    Route::get('user', 'AuthController@user');
    Route::post('logout', 'AuthController@logout');
    Route::post('login', 'AuthController@login');
});

 Route::get('profil','userController@profile');
 Route::get('users','userController@index');
 Route::post('user','userController@store');
 Route::delete('user/{id}','userController@delete');
 Route::put('user/{id}','userController@update');

//Route::apiResources(['restaurants'=>'restaurantController']);
//Route::apiResources(['reservations'=>'restaurantController']);


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

Route::get('tables','tableController@index');
Route::get('tableR','tableController@list');
Route::get('table/{id}','tableController@show');
Route::post('table','tableController@store');
Route::put('table/{id}','tableController@update');
Route::delete('table/{id}','tableController@delete');

Route::get('rooms','roomController@index');
Route::get('room/{id}','roomController@show');
Route::post('room','roomController@store');
Route::put('room/{id}','roomController@update');
Route::delete('room/{id}','roomController@delete');


//Route::apiResources(['user' => 'userController']);


Route::get('orders','orderController@index');
Route::get('order/{id}','orderController@show');
Route::post('order','orderController@store');
Route::put('order/{id}','orderController@update');
Route::delete('order/{id}','orderController@delete');

Route::get('tasks','taskController@index');
Route::get('task/{id}','taskController@show');
Route::post('task','taskController@store');
Route::put('task/{id}','taskController@update');
Route::delete('task/{id}','taskController@delete');


Route::get('questions','questionController@index');
Route::get('question/{id}','questionController@show');
Route::post('question','questionController@store');
Route::put('question/{id}','questionController@update');
Route::delete('question/{id}','questionController@delete');

Route::get('responses','responseController@index');
Route::get('response/{id}','responseController@show');
Route::post('response','responseController@store');
Route::put('response/{id}','responseController@update');
Route::delete('response/{id}','responseController@delete');

Route::get('responsesList','responsesController@index');
Route::get('responses/{id}','responsesController@show');
Route::post('responses','responsesController@store');

Route::get('forms','formController@index');
Route::get('form/{id}','formController@show');
Route::post('form','formController@store');
Route::put('form/{id}','formController@update');
Route::delete('form/{id}','formController@delete');

Route::get('userForms','userFormController@index');
Route::post('userForm','userFormController@store');
