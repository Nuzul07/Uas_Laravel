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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
	Route::get('/', 'AdminController@index');
	Route::get('/gudang', 'AdminController@indexgudang');
	Route::get('/gudang/add', 'AdminController@addgudang');
	Route::post('/gudang/save', 'AdminController@savegudang');
	Route::get('/gudang/edit/{id}', 'AdminController@editgudang');
	Route::post('/gudang/update', 'AdminController@updategudang');
	Route::get('/gudang/delete/{id}', 'AdminController@deletegudang');
	Route::get('/barang', 'AdminController@indexbarang');
	Route::get('/barang/add', 'AdminController@addbarang');
	Route::post('/barang/save', 'AdminController@savebarang');
	Route::get('/barang/edit/{id}', 'AdminController@editbarang');
	Route::post('/barang/update', 'AdminController@updatebarang');
	Route::get('/barang/delete/{id}', 'AdminController@deletebarang');
});
