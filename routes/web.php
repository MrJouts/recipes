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

// Auth

Route::get('registro', [
	'as' => 'registro',
	'uses' => 'AuthController@showRegistro'
]);

Route::post('registro', [
	'as' => 'auth.doRegistro',
	'uses' => 'AuthController@doRegistro'
]);

Route::get('login', [
	'as' => 'login',
	'uses' => 'AuthController@showLogin'
]);

Route::post('login', [
	'as' => 'auth.doLogin',
	'uses' => 'AuthController@doLogin'
]);

Route::get('logout', [
	'as' => 'auth.logout',
	'uses' => 'AuthController@logout'
]);

// Frontend

Route::get('/', function () {
	return view('home');
});

Route::get('/contacto', function () {
	return view('contacto');
});

Route::get('/recetas', [
	'as' => 'recetas',
	'uses' => 'RecetasController@index_front',
]);


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

Route::post('/cpanel/recetas/crear', [
	'as' => 'recetas.store',
	'uses' => 'RecetasController@store',
]);

Route::get('/cpanel/recetas/{receta}', [
	'as' => 'recetas.show',
	'uses' => 'RecetasController@show',
]);

Route::get('/cpanel/recetas/{receta}/editar', [
	'as' => 'recetas.edit',
	'uses' => 'RecetasController@edit',
]);

Route::put('/cpanel/recetas/{receta}/editar', [
	'as' => 'recetas.update',
	'uses' => 'RecetasController@update',
]);


// Categorías

Route::get('/cpanel/categorias', [
	'as' => 'categorias.index',
	'uses' => 'CategoriasController@index',
]);

Route::post('/cpanel/categorias/crear', [
	'as' => 'categorias.store',
	'uses' => 'CategoriasController@store',
]);


// Perfil

Route::get('/cpanel/perfil', function() {
	return view('cpanel.perfil');
});

// Auth

// Route::get('/ingresar', [
// 	'as' => 'recetas.index',
// 	'uses' => 'RecetasController@index',
// ]);
