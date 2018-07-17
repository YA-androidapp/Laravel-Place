<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('place', 'PlaceController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('search', 'PlaceController@search');
Route::get('where', 'PlaceController@where');
Route::post('where', 'PlaceController@where');

Route::group(['middleware' => 'auth'], function () {
    Route::get('csv/import', 'CsvController@import');
    Route::post('csv/import', 'CsvController@store');
});
