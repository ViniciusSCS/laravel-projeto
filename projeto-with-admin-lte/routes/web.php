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

Route::get('/produtos', 'ProdutoController@lista')->name('produtos.lista');
Route::get('/produtos/novo', 'ProdutoController@novo')->name('produtos.novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona')->name('produtos.adiciona');
Route::post('/produtos/atualizar/{id}', 'ProdutoController@atualizar')->name('produtos.atualizar');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->name('produtos.mostra');
Route::get('/produtos/alterar/{id}', 'ProdutoController@alterar')->name('produtos.alterar');
Route::get('/produtos/excluir/{id}', 'ProdutoController@excluir')->name('produtos.exclui');



Route::get('/categorias', 'CategoriaController@lista')->name('categorias.lista');
Route::get('/categorias/novo', 'CategoriaController@novo')->name('categorias.novo');
Route::post('/categorias/adiciona', 'CategoriaController@adiciona')->name('categorias.adiciona');
Route::post('/categorias/atualizar/{idCategoria}', 'CategoriaController@atualizar')->name('categorias.atualizar');
Route::get('/categorias/mostra/{idCategoria}', 'CategoriaController@mostra')->name('categorias.mostra');
Route::get('/categorias/alterar/{idCategoria}', 'CategoriaController@alterar')->name('categorias.alterar');
Route::get('/categorias/excluir/{idCategoria}', 'CategoriaController@excluir')->name('categorias.exclui');