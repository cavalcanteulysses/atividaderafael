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


Route::group(['prefix'=>'/', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',['as'=>'matriculas', 'uses'=>'MatriculaController@index']);
    Route::get('matricula',['as'=>'matriculas.create', 'uses'=>'MatriculaController@create']);
    Route::post('salvar',['as'=>'matriculas.store', 'uses'=>'MatriculaController@store']);
    Route::get('{id}/destroy',['as'=>'matriculas.destroy', 'uses'=>'MatriculaController@destroy']);
    Route::get('{id}/editar',['as'=>'matriculas.edit', 'uses'=>'MatriculaController@edit']);
    Route::put('{id}/update',['as'=>'matriculas.update', 'uses'=>'MatriculaController@update']);
});

