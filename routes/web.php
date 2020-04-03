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

// Frontend
Route::get('/', 'Web\FrontController@index');
Route::get('/Artikel/{judul}', 'Web\FrontController@show')->name('artikel.detail');
Route::get('/Artikel-kategori/{kategori}', 'Web\FrontController@artikelKategori')->name('artikel.kategori');

// About
Route::get('/About', 'Web\FrontController@about')->name('about');


// Backend
Route::get('/auth', function () {
    return view('login');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

// Routing kategori
Route::resource('kategori', 'KategoriController');
Route::get('kategori/delete/{id}', 'KategoriController@destroy');

// Routing artikel
Route::resource('artikel', 'ArtikelController');
