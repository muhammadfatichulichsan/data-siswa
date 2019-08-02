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
 	

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('siswa','SiswaController');
Route::get('/hasilcari','SiswaController@search')->name('cari');
Route::get('/import','SiswaController@upload')->name('import.excel');
Route::post('/import','SiswaController@import')->name('tambah.excel');
Route::get('export','SiswaController@export')->name('export.excel');
Route::delete('data','SiswaController@truncate')->name('delete.all');