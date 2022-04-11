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

// home
// Route::get('/', function () {
// return view('index');
// });
Route::get('/', 'App\Http\Controllers\HomepageController@index')->name('listings.index');
Route::get('/cars/{id}', 'App\Http\Controllers\HomepageController@show')->name('listings.show');
// contact
Route::get('/contact', function () {
    return view('contact');
});

// about
Route::get('/about', function () {
return view('about');
});

// listings
Route::get('/listings', 'App\Http\Controllers\ListingController@index')->name('listings.index');
Route::get('/listings/create', 'App\Http\Controllers\ListingController@create')->name('listings.create');
Route::get('/listings/edit/{id}', 'App\Http\Controllers\ListingController@edit')->name('listings.edit');
Route::put('/listings/edit/{id}', 'App\Http\Controllers\ListingController@update')->name('listings.update');
Route::post('/listings', 'App\Http\Controllers\ListingController@store')->name('listings.store');
Route::get('/listings/{id}', 'App\Http\Controllers\ListingController@show')->name('listings.show');
Route::delete('/listings/{id}', 'App\Http\Controllers\ListingController@destroy')->name('listings.destroy');

// cars
Route::get('/cars', 'App\Http\Controllers\CarController@index')->name('cars.index');
Route::get('/cars/{id}', 'App\Http\Controllers\CarController@show')->name('cars.show');

// Auth
Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
