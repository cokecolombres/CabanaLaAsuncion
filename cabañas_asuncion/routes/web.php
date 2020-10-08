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
Route::get('/nosotros', 'FrontController@indexNosotros')->name('nosotros');
Route::get('/contacto', 'FrontController@indexContacto')->name('contacto');

Auth::routes();
Route::get('/mi-cuenta', 'HomeController@index')->name('home');
Route::middleware(['auth'])->prefix('mi-cuenta')->group(function(){

Route::get('/remates', 'RemateController@list')->name('list-remates');
Route::get('/remates/nuevo', 'RemateController@create')->name('nuevo-remate');
Route::post('/remates/nuevo', 'RemateController@store')->name('guardar-remate');
Route::get('/remates/{id}/lotes', 'RemateController@show')->name('crear-lote');
Route::post('/remates/{id}/lotes', 'LoteController@store')->name('guardar-lote');
Route::get('/remates/{id}/lotes/imagen', 'ImagenLoteController@index')->name('imagenes-lote');
Route::post('/remates/{id}/lotes/imagen', 'ImagenLoteController@store')->name('guardar-imagen');
Route::delete('/remates/{id}/lotes/imagen', 'ImagenLoteController@destroy');
Route::get('/remates/{lote}/lotes/imagen/{id}', 'ImagenLoteController@select');
});