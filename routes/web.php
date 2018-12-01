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
    return view('frontends.index');
});

Route::get('/login', function () {
    return view('layouts.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function () {
Route::resource('kategori','KategoriController');
Route::resource('obat','ObatController');
Route::resource('galeri', 'GaleriController');
Route::resource('testimoni', 'TestimoniController');




});

Route::get('/contact', function () {
    return view('frontends.contact');
});
Route::get('obat_kategori/{id}', 'ObatController@filter_Obat');
Route::get('/produks/singleproduk/{Obat}', 'FrontEndController@singleproduk')->name('singleproduk');
Route::get('/produk', 'FrontEndController@Obat')->name('Obat');
Route::get('/index', 'FrontEndController@index')->name('index');
Route::get('/galeri', 'FrontEndController@Galeri')->name('Galeri');
Route::get('/testimoni', 'FrontEndController@Testimoni')->name('Testimoni');





