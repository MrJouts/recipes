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

Route::get('/', [
    'as' => 'recetas.showFrontHome',
    'uses' => 'FrontController@showFrontHome',
]);

Route::get('/recetas', [
    'as' => 'recetas',
    'uses' => 'FrontController@index',
]);

Route::get('/recetas/{receta}', [
    'as' => 'recetas.showFrontRecetas',
    'uses' => 'FrontController@showFrontRecetas',
]);

Route::get('/contacto', function () {
    return view('contacto');
});


// Comments

Route::put('/recetas/{receta}/comments', [
    'as' => 'recetas.comments',
    'uses' => 'ComentariosController@store',
]);


// Cpanel

Route::middleware('auth')->group(function() {

// Principal

    Route::get('/cpanel', [
        'as' => 'recetas.index',
        'uses' => 'RecetasController@index',
        'middleware' => 'admin'
    ]);

// Recetas

    Route::get('/cpanel/recetas', [
        'as' => 'recetas.index',
        'uses' => 'RecetasController@index',
        'middleware' => 'admin'
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

    Route::get('/cpanel/recetas/{receta}/eliminar', [
        'as' => 'recetas.confirmDestroy',
        'uses' => 'RecetasController@confirmDestroy',
    ]);

    Route::delete('/cpanel/recetas/{receta}/eliminar', [
        'as' => 'recetas.destroy',
        'uses' => 'RecetasController@destroy',
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

    Route::get('/cpanel/categorias/{categoria}/editar', [
        'as' => 'categorias.edit',
        'uses' => 'CategoriasController@edit',
    ]);

    Route::put('/cpanel/categorias/{categoria}/editar', [
        'as' => 'categorias.update',
        'uses' => 'CategoriasController@update',
    ]);

    Route::get('/cpanel/categorias/{categoria}/eliminar', [
        'as' => 'categorias.confirmDestroy',
        'uses' => 'CategoriasController@confirmDestroy',
    ]);

    Route::delete('/cpanel/categorias/{categoria}/eliminar', [
        'as' => 'categorias.destroy',
        'uses' => 'CategoriasController@destroy',
    ]);


// Perfil

    Route::get('/cpanel/perfil', function() {
        return view('cpanel.perfil');
    });

    Route::post('/cpanel/usuarios/{usuario}/editar', [
        'as' => 'usuarios.update',
        'uses' => 'UsuariosController@update',
    ]);


// Usuarios

    Route::get('/cpanel/usuarios', [
        'as' => 'usuarios.index',
        'uses' => 'UsuariosController@index',
    ]);
});