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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/remates', 'RemateController@index')->name('remates');
Route::get('/remates/{id}', 'RemateController@show')->name('mostrar-remate');
Route::get('/nosotros', 'PublicacionController@index')->name('nosotros');

Auth::routes();

Route::get('/mi-cuenta', 'HomeController@index')->name('home');
Route::get('/mi-cuenta/remates', 'RemateController@list')->name('list-remates');
Route::get('/mi-cuenta/remates/nuevo', 'RemateController@create')->name('nuevo-remate');
Route::post('/mi-cuenta/remates/nuevo', 'RemateController@store')->name('guardar-remate');
