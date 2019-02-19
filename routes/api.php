<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/recetas', 'Api\RecetasApiController@index');

Route::get('/recetas/{receta}', 'Api\RecetasApiController@show');

Route::post('/recetas', 'Api\RecetasApiController@store');

Route::put('/recetas/{receta}/editar', 'Api\RecetasApiController@update');

Route::delete('/recetas/{receta}/eliminar', 'Api\RecetasApiController@destroy');
