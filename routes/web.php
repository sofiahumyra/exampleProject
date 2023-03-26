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


//Flight Routes
Route::get('flight/insert','FlightController@insert')->name('insert');
Route::post('/flight/create','FlightController@create')->name('create');// dekat mana nak route
Route::get('flight/{flight}/booking','FlightController@booking')->name('flight.booking');
Route::post('flight/{flight}/booking','BookingController@store')->name('flight.booking.store');
Route::get('/flight/edit/{id}','FlightController@show')->name('edit');
Route::post('/flight/edit/{id}','FlightController@edit')->name('update');
Route::get('delete-records','FlightController@index')->name('delete');
Route::get('/flight/delete/{id}','FlightController@destroy')->name('destroy');

//Booking Routes
Route::get('/booking/{flight}/insert','BookingController@insert')->name('insert');
Route::post('/booking/{flight}/insert','BookingController@create')->name('insert');


//Customer Routes
Route::get('/customer/{booking}/insert','CustomerController@insert')->name('insert');
Route::post('/customer/{booking}/insert','CustomerController@create')->name('insert');
Route::get('/customer/{customer}/insert','DisplayinputController@display')->name('show');


//User Routes
Route::get('/user/profile', 'UserProfileController@view')->name('user.profile');
Route::get('/user/profile/edit','UserProfileController@edit')->name('user.profile.edit');
Route::post('/user/profile/edit', 'UserProfileController@update')->name('user.profile.update');


// State Part
Route::get('/state', 'StateController@index')->name('state.view');
Route::post('/state', 'StateController@store')->name('store');
Route::get('/state/{id}/city_view', 'CitiesController@index')->name('view');
Route::post('/state/{id}/city_view', 'CitiesController@store')->name('store');













