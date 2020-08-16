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

// Route::get('books', 'BookController@index'); //show/read all data
// Route::post('books', 'BookController@store'); //create new data
// Route::get('books/{id}', 'BookController@show'); //show/read by id
// Route::put('books/{id}', 'BookController@update'); //update data by id
// Route::delete('books/{id}', 'BookController@destroy'); //delete data by id


Route::resource('books', 'BookController');