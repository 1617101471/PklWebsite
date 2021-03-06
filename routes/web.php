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
    return view('guest');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']],
function (){
	Route::resource('/barang', 'BarangController');
	Route::resource('/user', 'UserController');
	Route::resource('/peminjaman', 'PeminjamanController');
	Route::resource('/pengembalian', 'PengembalianController');
});
Route::group(['prefix'=>'member', 'middleware'=>['auth','role:member|admin']],
function(){
	Route::resource('/barang', 'BarangController');
	Route::resource('/peminjaman', 'PeminjamanController');
});



