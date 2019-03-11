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
    return view('auth.login');
});

Route::get('/produtos','ProdutosController@lista');

Route::get('/produtos/mostra/{id}','ProdutosController@mostra')->where('id','[0-9]+');

Route::get('/produtos/remove/{id}','ProdutosController@remove')->where('id','[0-9]+');

Route::get('/produtos/novo','ProdutosController@novo');

Route::post('/produtos/adiciona','ProdutosController@adiciona');

Route::get('/produtos/altera/{id}', 'ProdutosController@altera')->where('id','[0-9]+');

Route::post('/produtos/alterado/{id}', 'ProdutosController@alterado')->where('id','[0-9]+');

Route::get('home', 'HomeController@index')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
