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
    return view('home');
});


Route::get('/contacto', function () {
    return view('contacto');
});


Route::get('/recetas', function () {
    return view('recetas');
});



Route::get('/recetas', function () {
    return view('recetas');
});


// Cpanel

// Recetas

Route::get('/cpanel/recetas', [
	'as' => 'recetas.index',
	'uses' => 'RecetasController@index',
]);

Route::get('/cpanel/recetas/crear', [
	'as' => 'recetas.create',
	'uses' => 'RecetasController@create',
]);

Route::get('/cpanel/recetas/{receta}', [
	'as' => 'recetas.show',
	'uses' => 'RecetasController@show',
]);

Route::get('/cpanel/recetas/{receta}/editar', [
	'as' => 'recetas.edit',
	'uses' => 'RecetasController@edit',
]);
