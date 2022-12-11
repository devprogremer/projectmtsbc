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


Auth::routes();

Route::middleware(['hideRegister'])->group(function () {
	Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
});


Route::get('/', 'HomeController@index');
Route::get('/daftar', 'DaftarController@index');
Route::post('/ortu', 'DaftarController@store');
Route::get('/siswa', 'DaftarController@siswa');
Route::post('/daftar', 'DaftarController@siswaStore');

Route::middleware(['auth'])->group(function () {
Route::get('/admin', 'DashboardController@index')->name('home');
Route::get('/admin/detail/{id}', 'DashboardController@detail')->name('detail-peserta');
Route::get('/admin/view/{id}', 'DashboardController@view')->name('view-peserta');
Route::patch('/admin/diterima/{id}', 'DashboardController@terima')->name('peserta-diterima');
Route::patch('/admin/ditolak/{id}', 'DashboardController@ditolak')->name('peserta-ditolak');
Route::get('/download', 'DashboardController@download')->name('download');

	Route::resource('admin/user', 'usercontroller');
});
