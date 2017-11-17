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


Route::group(['prefix'=>'produtos', 'middleware' => ['auth'], 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',['as'=>'produtos', 'uses'=>'ProdutosController@index']);
    Route::get('create',['as'=>'produtos.create', 'uses'=>'ProdutosController@create']);
    Route::post('store',['as'=>'produtos.store', 'uses'=>'ProdutosController@store']);
    Route::get('{id}/destroy',['as'=>'produtos.destroy', 'uses'=>'ProdutosController@destroy']);
    Route::get('{id}/edit',['as'=>'produtos.edit', 'uses'=>'ProdutosController@edit']);
    Route::put('{id}/update',['as'=>'produtos.update', 'uses'=>'ProdutosController@update']);
});

Route::group(['prefix'=>'compras', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',['as'=>'compras', 'uses'=>'ProcessoController@index']);
    Route::get('create',['as'=>'compras.create', 'uses'=>'ProcessoController@create']);
    Route::get('create',['as'=>'compras.create','uses'=>'DocumentoController@index']);
    Route::post('store',['as'=>'compras.store', 'uses'=>'ProcessoController@store']);
    Route::get('{id}/destroy',['as'=>'compras.destroy', 'uses'=>'ProcessoController@destroy']);
    Route::get('{id}/edit',['as'=>'compras.edit', 'uses'=>'ProcessoController@edit']);
    Route::put('{id}/update',['as'=>'compras.update', 'uses'=>'ProcessoController@update']);
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
