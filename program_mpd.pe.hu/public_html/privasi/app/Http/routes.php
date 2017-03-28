<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'UserController@index');

Route::get('/home', 'UserController@index');

Route::get('/profil', function () {
    return view('tentang');
});

Route::post('/profil-pesan', 'PesanController@store');

Route::get('/khotbah', 'KhotbahController@index');

Route::get('/kegiatan', function () {
    return view('kegiatan');
});

/*
--------------------------------------------------------------------------
*/

Route::get('/kajian', 'KajianController@index');

Route::get('/kajian/{kate}', 'KajianController@kategori');
Route::get('/kajian/{kait}/{id}', 'KajianController@show');
Route::group(['middleware' => ['web']], function () {
    Route::get('post-kajian/cari', 'KajianController@cari');
    Route::resource('post-kajian', 'KajianController');
});
Route::get('/post-kajian/{id}', function () {
    return view('post-kajian');
});

/*
--------------------------------------------------------------------------
*/

Route::get('/mahad', 'MahadController@index');

Route::get('/mahad/{id}', 'MahadController@show');
Route::group(['middleware' => ['web']], function () {
    Route::get('post-mahad/cari', 'MahadController@cari');
    Route::resource('post-mahad', 'MahadController');
});
Route::get('/post-mahad/{id}', function () {
    return view('post-mahad');
});

/*
--------------------------------------------------------------------------
*/

Route::get('/berita', 'BeritaController@index');

Route::get('/berita/home', 'UserController@index');
Route::get('/berita/profil', function () {
    return view('tentang');
});
Route::get('/berita/khotbah', 'KhotbahController@index');
Route::get('/berita/kajian', 'KajianController@index');
Route::get('/berita/mahad', 'MahadController@index');
Route::get('/berita/berita', 'BeritaController@index');
Route::get('/berita/galerifoto', 'GaleriController@index');
Route::get('/berita/donasi', 'DonasiController@index');
Route::get('/berita/faq', 'FaqController@index');
Route::get('/berita/unduhan', 'UnduhanController@index');

Route::get('/berita/{kait}/home', 'UserController@index');
Route::get('/berita/{kait}/profil', function () {
    return view('tentang');
});
Route::get('/berita/{kait}/khotbah', 'KhotbahController@index');
Route::get('/berita/{kait}/kajian', 'KajianController@index');
Route::get('/berita/{kait}/mahad', 'MahadController@index');
Route::get('/berita/{kait}/berita', 'BeritaController@index');
Route::get('/berita/{kait}/galerifoto', 'GaleriController@index');
Route::get('/berita/{kait}/donasi', 'DonasiController@index');
Route::get('/berita/{kait}/faq', 'FaqController@index');
Route::get('/berita/{kait}/unduhan', 'UnduhanController@index');

Route::get('/post-berita/home', 'UserController@index');
Route::get('/post-berita/profil', function () {
    return view('tentang');
});
Route::get('/post-berita/khotbah', 'KhotbahController@index');
Route::get('/post-berita/kajian', 'KajianController@index');
Route::get('/post-berita/mahad', 'MahadController@index');
Route::get('/post-berita/berita', 'BeritaController@index');
Route::get('/post-berita/galerifoto', 'GaleriController@index');
Route::get('/post-berita/donasi', 'DonasiController@index');
Route::get('/post-berita/faq', 'FaqController@index');
Route::get('/post-berita/unduhan', 'UnduhanController@index');

Route::get('/berita/{kunci}', 'BeritaController@katakunci');
Route::get('/berita/{kait}/{id}', 'BeritaController@show');
Route::group(['middleware' => ['web']], function () {
    Route::get('post-berita/cari', 'BeritaController@cari');
    Route::resource('post-berita', 'BeritaController');
});
Route::get('/post-berita/{id}', function () {
    return view('post-berita');
});

/*
--------------------------------------------------------------------------
*/

Route::get('/galerifoto', 'GaleriController@index');

Route::get('/donasi', 'DonasiController@index');

Route::get('/faq', 'FaqController@index');

Route::get('/unduhan', 'UnduhanController@index');

//=====================================================================================================================================

Route::get('/log', function () {
    return view('login');
});
// Route::get('/register', function () {
//     return view('register');
// });
// Route::post('/tambahlogin', 'LoginController@tambahlogin');
Route::post('/log', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
Route::get('/admin', 'admin\AdminController@index');

Route::get('/admin-pesan-all', 'admin\PesanController@index');
Route::get('/admin-pesan-reply/{id}', 'admin\PesanController@show');
Route::get('/admin-pesan-delete/{id}', 'admin\PesanController@destroy');
Route::get('/admin-pesan-delete-all', 'admin\PesanController@delete');

Route::get('/admin-khotbah', 'admin\KhotbahController@index');
Route::post('/admin-khotbah', 'admin\KhotbahController@store');

Route::get('/admin-kajian-all', 'admin\KajianController@index');
Route::get('/admin-kajian-all/{kate}', 'admin\KajianController@kategori');
Route::get('/admin-kajian-add', 'admin\KajianController@create');
Route::post('/admin-kajian-add', 'admin\KajianController@store');
Route::get('/admin-kajian-view/{id}', 'admin\KajianController@show');
Route::get('/admin-kajian-view/{kajian}', function () {
    return view('admin/admin-kajian-view');
});
Route::get('/admin-kajian-edit/{kajian}', 'admin\KajianController@edit');
Route::post('/admin-kajian-edit/{id}', 'admin\KajianController@update');
Route::get('/admin-kajian-delete/{id}', 'admin\KajianController@destroy');

Route::get('/admin-mahad-all', 'admin\MahadController@index');
Route::get('/admin-mahad-all/{kate}', 'admin\MahadController@kategori');
Route::get('/admin-mahad-add', 'admin\MahadController@create');
Route::post('/admin-mahad-add', 'admin\MahadController@store');
Route::get('/admin-mahad-view/{id}', 'admin\MahadController@show');
Route::get('/admin-mahad-view/{mahad}', function () {
    return view('admin/admin-mahad-view');
});
Route::get('/admin-mahad-edit/{mahad}', 'admin\MahadController@edit');
Route::post('/admin-mahad-edit/{id}', 'admin\MahadController@update');
Route::get('/admin-mahad-delete/{id}', 'admin\MahadController@destroy');

Route::get('/admin-berita-all', 'admin\BeritaController@index');
Route::get('/admin-berita-all/{kunci}', 'admin\BeritaController@katakunci');
Route::get('/admin-berita-add', 'admin\BeritaController@create');
Route::post('/admin-berita-add', 'admin\BeritaController@store');
Route::get('/admin-berita-view/{id}', 'admin\BeritaController@show');
Route::get('/admin-berita-view/{berita}', function () {
    return view('admin/admin-berita-view');
});
Route::get('/admin-berita-edit/{berita}', 'admin\BeritaController@edit');
Route::post('/admin-berita-edit/{id}', 'admin\BeritaController@update');
Route::get('/admin-berita-delete/{id}', 'admin\BeritaController@destroy');

Route::get('/admin-galeri-all', 'admin\GaleriController@index');
Route::get('/admin-galeri-add', 'admin\GaleriController@create');
Route::post('/admin-galeri-add', 'admin\GaleriController@store');
Route::get('/admin-galeri-view/{id}', 'admin\GaleriController@show');
Route::get('/admin-galeri-delete/{id}', 'admin\GaleriController@destroy');

Route::get('/admin-donasi-all', 'admin\DonasiController@index');
Route::get('/admin-donasi-adds', function () {
    return view('admin/admin-donasi-adds');
});
Route::get('/admin-donasi-addx', 'admin\DonasiController@create');
Route::post('/admin-donasi-adds', 'admin\DonasiController@store');
Route::post('/admin-donasi-addx', 'admin\DonasiController@excel');
Route::get('/admin-donasi-delete/{id}', 'admin\DonasiController@destroy');

Route::get('/admin-faq', 'admin\FaqController@index');
Route::post('/admin-faq', 'admin\FaqController@store');
Route::get('/admin-faq/{id}', 'admin\FaqController@destroy');

Route::get('/admin-unduhan', 'admin\UnduhanController@index');
Route::post('/admin-unduhan', 'admin\UnduhanController@store');

Route::auth();

Route::get('/home', 'HomeController@index');
