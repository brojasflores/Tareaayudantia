<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'paisesController@showHome');
Route::get('/listar', 'paisesController@showListar');
Route::get('/detalles', 'paisesController@showDetalles');
Route::get('/nuevo', 'paisesController@newPais');
Route::post('/crear','paisesController@createPais');
Route::post('/eliminar','paisesController@deletePais');
Route::get('/editar{id}','paisesController@editPais');
Route::post('/guardarcambio','paisesController@changePais');
