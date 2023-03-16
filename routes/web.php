<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/flight', 'FlightController@index');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/flight', 'FlightController@index')->name('flight');

// Update
Route::get('/flight/edit/{id}','FlightController@show')->name('edit');
Route::post('/flight/edit/{id}','FlightController@edit')->name('update');

//Delete
Route::get('delete-records','FlightController@index')->name('flight');
Route::get('/flight/delete/{id}','FlightController@destroy')->name('destroy');
