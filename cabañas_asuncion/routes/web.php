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

Route::get('/remates', 'MiCuentaController@index')->name('remates');
Route::get('/nosotros', 'FrontController@indexNosotros')->name('nosotros');
Route::get('/contacto', 'FrontController@indexContacto')->name('contacto');

Auth::routes();
Route::get('/mi-cuenta', 'HomeController@index')->name('home');
Route::middleware(['auth'])->prefix('mi-cuenta')->group(function(){

Route::get('/nuevo-remate', 'MiCuentaController@create')->name('nuevo-remate');
Route::post('/nuevo-remate', 'MiCuentaController@store')->name('guardar-remate');
Route::get('/edit-remate/{id}', 'MiCuentaController@edit')->name('editar-remate');
Route::post('/edit-remate/{id}', 'MiCuentaController@update')->name('guardar-edicion');
Route::post('/cambiar-imagen/{id}','MiCuentaController@changeImagen')->name('cambiar-imagen');
Route::post('/cambiar-archivo/{id}','MiCuentaController@changeFile')->name('cambiar-archivo');
Route::get('/lotes/{id}', 'MiCuentaController@show')->name('crear-lote');
Route::post('/lotes/{id}', 'LoteController@store')->name('guardar-lote');
Route::get('/lotes/imagen/{id}', 'ImagenLoteController@index')->name('imagenes-lote');
Route::post('/lotes/imagen/{id}', 'ImagenLoteController@store')->name('guardar-imagen');
Route::delete('/lotes/imagen/{id}', 'ImagenLoteController@destroy');
Route::get('/{lote}/lotes/imagen/{id}', 'ImagenLoteController@select');
});