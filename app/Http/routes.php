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
Route::get('/', function() {
	return view('inicio');
})->name('inicio');

Route::get('nosotros', function() {
	return view('nosotros');
})->name('nosotros');

Route::get('software', function() {
	return view('software');
})->name('software');

Route::get('software-light-version', function() {
	return view('software-light');
})->name('software-light');

Route::get('software-premium', function() {
	return view('software-premium');
})->name('software-premium');

Route::get('software-restaurantes', function() {
	return view('software-restaurantes');
})->name('software-restaurantes');

Route::get('productos', function() {
	return view('productos');
})->name('productos');

Route::get('soporte', function() {
	return view('soporte');
})->name('soporte');

Route::get('soporte-descargas', function() {
	return view('soporte-descargas');
})->name('soporte-descargas');

Route::get('pago', function() {
	return view('pago');
})->name('pago');

Route::get('entrar', function() {
	return view('login');
})->name('entrar');

Route::get('distribuidores', function() {
	return view('distribuidores');
})->name('distribuidores');

Route::get('casos-exito', function() {
	return view('casosdeexito');
})->name('casos-exito');

Route::get('file/{filename}', function( $filename ) {
	return response()->download(public_path('descargas\\' . $filename));
})->name('download');

// Ruta para generar pago
Route::post('genera-pago', 'Pago@create')->name('genera.pago');

// Ruta para validar credenciales
Route::post('login', 'Session@login')->name('login');
Route::get('logout', 'Session@logout')->name('logout');