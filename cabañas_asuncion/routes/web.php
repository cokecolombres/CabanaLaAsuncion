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
Route::get('/{id}/edit-remate', 'MiCuentaController@edit')->name('editar-remate');
Route::post('/{id}/edit-remate', 'MiCuentaController@update')->name('guardar-edicion');
Route::post('/{id}/cambiar-imagen','MiCuentaController@changeImagen')->name('cambiar-imagen');
Route::get('/{id}/lotes', 'MiCuentaController@show')->name('crear-lote');
Route::post('/{id}/lotes', 'LoteController@store')->name('guardar-lote');
Route::get('/{id}/lotes/imagen', 'ImagenLoteController@index')->name('imagenes-lote');
Route::post('/{id}/lotes/imagen', 'ImagenLoteController@store')->name('guardar-imagen');
Route::delete('/{id}/lotes/imagen', 'ImagenLoteController@destroy');
Route::get('/{lote}/lotes/imagen/{id}', 'ImagenLoteController@select');
});