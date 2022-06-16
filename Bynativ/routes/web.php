<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('appointments.')->group(function(){
    Route::get('/', 'AppointmentController@create')->name('create');
    Route::post('/', 'AppointmentController@store')->name('store');
    Route::get('/{id}', 'AppointmentController@show')->name('show');
});
