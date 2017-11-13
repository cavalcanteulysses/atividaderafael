<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',['as'=>'produtos', 'uses'=>'ProdutosController@index']);
    Route::get('create', ['as'=>'produtos.create', 'uses'=>'ProdutosController@create']);
    Route::post('create',['as'=>'produtos.store', 'uses'=>'ProdutosController@store']);
    Route::get('{id}/destroy',['as'=>'produtos.destroy', 'uses'=>'ProdutosController@destroy']);
    Route::get('{id}/edit',['as'=>'produtos.edit', 'uses'=>'ProdutosController@edit']);
    Route::put('{id}/update',['as'=>'produtos.update', 'uses'=>'ProdutosController@update']);
    Route::get('{id}','ProdutosController@getId');
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::controllers(['auth' => 'Auth\AuthController','password' => 'Auth\PasswordController',]);

Route::get('secreto', ['middleware'=>'auth', function() {
    return "Conteudo visivel apenas para usuários autenticados";
}]);