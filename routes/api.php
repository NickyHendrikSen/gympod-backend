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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
Route::get('/getBookings', 'BookingController@getBookings');
Route::get('/getPods', 'PodController@getPods');
Route::get('/getStatus', 'StatusController@getStatus');


Route::post('/login', 'UserController@loginAttempt');
Route::post('/logout', 'UserController@logoutAttempt');