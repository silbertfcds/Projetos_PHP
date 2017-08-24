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

Route::get('/','ProdutoController@index');

Route::group(['prefix' => 'api'], function () {

	Route::get('produtos/listar', ['as' => 'produto.listar', 'uses' => 'ProdutoController@listar']);
	Route::post('produtos/create', ['as' => 'produto.create', 'uses' => 'ProdutoController@store']);
	Route::post('produtos/destroy', ['as' => 'produto.destroy', 'uses' => 'ProdutoController@destroy']);
	
});
