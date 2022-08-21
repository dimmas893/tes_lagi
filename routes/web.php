<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product', 'ProductController@index')->name('products.index');
Route::post('/product', 'ProductController@store')->name('products.store');

Route::get('/produk/cari','HomeController@cari')->name('user.produk.cari');
Route::get('/produk/caristatus','HomeController@caristatus')->name('user.produk.caristatus');
Route::get('/produk/caritanggal','HomeController@caritanggal')->name('user.produk.caritanggal');
Route::get('/create','UserController@create')->name('user.create');
Route::post('/create','UserController@store')->name('user.store');


