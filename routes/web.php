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

// Insert Data
Route::get('flight/insert','FlightController@insert')->name('insert');
Route::post('/flight/create','FlightController@create')->name('create');// dekat mana nak route
Route::get('flight/{flight}/booking','FlightController@booking')->name('flight.booking');
Route::post('flight/{flight}/booking','BookingController@store')->name('flight.booking.store');
// Route::post('/flight/create',function(){
// })->name('create');

// Update Data
Route::get('/flight/edit/{id}','FlightController@show')->name('edit');
Route::post('/flight/edit/{id}','FlightController@edit')->name('update');

//Delete Data
Route::get('delete-records','FlightController@index')->name('delete');
Route::get('/flight/delete/{id}','FlightController@destroy')->name('destroy');

//Booking Insert
Route::get('/booking/{flight}/insert','BookingController@insert')->name('insert');
Route::post('/booking/{flight}/insert','BookingController@create')->name('insert');
//Route::post('/booking/create','BookingController@create')->name('create');

//Customer Insert
Route::get('/customer/{booking}/insert','CustomerController@insert')->name('insert');
Route::post('/customer/{booking}/insert','CustomerController@create')->name('insert');

//Display Invoice
Route::get('/customer/{customer}/insert','DisplayinputController@display')->name('show');


//Hide ID url booking th






