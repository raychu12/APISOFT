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

Route::resource('Rol','RolController');

Route::resource('Estanon','EstanonController');
Route::resource('Genero','GeneroController');
Route::resource('Estado_Civil','EstadoCivilController');
Route::resource('Ubicacion','UbicacionController');
Route::resource('Ubicacion','UbicacionController');
Route::resource('Colmena','ColmenaController');
Route::resource('Usuario','UsuarioController');





