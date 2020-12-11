<?php

use App\Done;
use App\Monitoring;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PemilihanController@welcome');

Route::post('/validasi', 'ValidasiPemilihController@validasi_kode')->name('validasi.index');

Route::get('/monitoring', 'MonitoringController@index');

Route::get('/pemilihan/{kode}', 'PemilihanController@index')->name('pemilihan.index');

Route::get('/pilih', 'PemilihanController@pilih_calon')->name('pilih.calon');

Route::get('/monitorings', 'MonitoringController@s');

Route::get('/hasilfinal', 'PemilihanController@final');

Auth::routes();
Route::match(["GET", "POST"], "/register", function () {
    return redirect("/login");
})->name("register");

Route::match(["GET", "POST"], "/password/confirm", function () {
    return redirect("/login");
});

Route::match(["GET", "POST"], "/password/reset", function () {
    return redirect("/login");
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homes', 'HomeController@index_2')->name('home2');

//Route Calon
Route::get('/calon/index', 'CalonPemilihanController@index')->name('capil.index');
Route::get('/calon/create', 'CalonPemilihanController@create')->name('capil.create');
Route::post('/calon/store', 'CalonPemilihanController@store')->name('capil.store');
Route::get('/calon/edit', 'CalonPemilihanController@edit')->name('capil.edit');

//Route Pascode
Route::get('/pascode', 'PascodeController@index')->name('pascode.index');
Route::get('/pascode/create', 'PascodeController@create')->name('pascode.create');
Route::get('/pascode/post', 'PascodeController@store')->name('pascode.store');

//Route Admin
Route::get('/admin', 'AdminController@index')->name('admin.index');
