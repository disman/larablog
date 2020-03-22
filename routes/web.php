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
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Routing kategori
Route::resource('kategori', 'KategoriController');
Route::get('kategori/delete/{id}', 'KategoriController@destroy');

// Routing artikel
Route::resource('artikel', 'ArtikelController');


// Routing grocery
Route::get('/grocery', 'GroceryController@index');
Route::post('/grocery/post', 'GroceryController@store');
