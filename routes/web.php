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

Route::get('/hola-mundo', function () {
	return ("<h1>Hello nigga</h1>");
});

Route::post('/hola-mundo', function () {
	return ("<h1>Hello nigga but POST</h1>");
});

Route::match(['get', 'post'], '/contacto', function () {
	return view('contacto');
});

// pasar parametro a la funcion de callback
Route::get('/usuario/{nombre}', function ($nombre) {
	// podemos pasarle los parametros obtenidos de la url
	return view('usuario', [
		"nombre" => $nombre
	]);
});

/*
Route::any('/contacto', function () {
	return view('contacto');
});

*/