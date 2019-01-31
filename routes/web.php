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

Route::resource('kategori', 'KategoriController');
Route::resource('obat', 'ObatController');
Route::resource('tentang', 'TentangController');
Route::resource('artikel', 'ArtikelController');
Route::resource('kategoriartikel', 'KategoriartikelController');

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], function () {
Route::resource('kategori','KategoriController');
Route::resource('obat','ObatController');
Route::post('obat/{publish}', 'ObatController@Publish')->name('obat.publish');
Route::resource('galeri', 'GaleriController');
Route::resource('testimoni', 'TestimoniController');
Route::resource('tentang','TentangController');
Route::resource('artikel','ArtikelController');
Route::resource('kategoriartikel','KategoriartikelController');
Route::resource('tag','TagController');
Route::get('logout','\App\Http\Controller\Auth\LoginController@logout');
});

Route::get('/contact', function () {
    return view('frontends.contact');
});
Route::get('obat_kategori/{id}', 'ObatController@filter_Obat');
Route::get('artikel_kategori/{id}', 'ArtikelController@filter_artikels');
Route::get('/artikels/single/{artikels}', 'FrontEndController@single')->name('single');
Route::get('/produks/singleproduk/{Obat}', 'FrontEndController@singleproduk')->name('singleproduk');
Route::get('/produk', 'FrontEndController@Obat')->name('Obat');
Route::get('/blog', 'FrontEndController@artikels')->name('artikels');
Route::get('/index', 'FrontEndController@index')->name('index');
Route::get('/galeri', 'FrontEndController@Galeri')->name('Galeri');
Route::get('/testimoni', 'FrontEndController@Testimoni')->name('Testimoni');





