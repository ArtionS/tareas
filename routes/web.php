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

Route::get('/home', 'HomeController@index')->name('home');

	//{variable que se resive en la URL}

Route::get('prueba/{nombre?}', function($nombre = 'Desconocido'){
	$nombre = strtoupper($nombre);
	return view('vista-prueba')->with(['nombre' => $nombre]);
});

Route::resource('/tarea', 'TareaController'); //->middleware('auth');