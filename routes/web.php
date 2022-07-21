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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/anggaran', 'AnggaranController@index')->name('anggaran');
Route::get('/anggaran/tambah', 'AnggaranController@create')->name('anggaran/tambah');
Route::post('/anggaran/simpan', 'AnggaranController@store')->name('anggaran/simpan');
Route::get('/anggaran/edit/{id}', 'AnggaranController@edit')->name('anggaran/edit');
Route::put('/anggaran/{id}', 'AnggaranController@update')->name('anggaran/update');
Route::get('/anggaran/delete/{id}', 'AnggaranController@destroy')->name('anggaran/delete');

Route::get('/bendahara', 'BendaharaController@index')->name('bendahara');
Route::get('/bendahara/edit/{id}', 'BendaharaController@edit')->name('bendahara/edit');
Route::put('/bendahara/{id}', 'BendaharaController@update')->name('bendahara/update');

Route::get('/dasar_spt', 'DasarSptController@index')->name('dasar_spt');
Route::get('/dasar_spt/tambah', 'DasarSptController@create')->name('dasar_spt/tambah');
Route::post('/dasar_spt/simpan', 'DasarSptController@store')->name('dasar_spt/simpan');
Route::get('/dasar_spt/edit/{id}', 'DasarSptController@edit')->name('dasar_spt/edit');
Route::put('/dasar_spt/{id}', 'DasarSptController@update')->name('dasar_spt/update');
Route::get('/dasar_spt/delete/{id}', 'DasarSptController@destroy')->name('dasar_spt/delete');

Route::get('/instansi', 'InstansiController@index')->name('instansi');
Route::get('/instansi/edit/{id}', 'InstansiController@edit')->name('instansi/edit');
Route::put('/instansi/{id}', 'InstansiController@update')->name('instansi/update');

Route::get('/jabatan', 'JabatanController@index')->name('jabatan');
Route::get('/jabatan/tambah', 'JabatanController@create')->name('jabatan/tambah');
Route::post('/jabatan/simpan', 'JabatanController@store')->name('jabatan/simpan');
Route::get('/jabatan/edit/{id}', 'JabatanController@edit')->name('jabatan/edit');
Route::put('/jabatan/{id}', 'JabatanController@update')->name('jabatan/update');
Route::get('/jabatan/delete/{id}', 'JabatanController@destroy')->name('jabatan/delete');

Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');
Route::get('/pegawai/tambah', 'PegawaiController@create')->name('pegawai/tambah');
Route::post('/pegawai/simpan', 'PegawaiController@store')->name('pegawai/simpan');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit')->name('pegawai/edit');
Route::put('/pegawai/{id}', 'PegawaiController@update')->name('pegawai/update');
Route::get('/pegawai/delete/{id}', 'PegawaiController@destroy')->name('pegawai/delete');

Route::get('/tujuan_perjalanan', 'TujuanPerjalananController@index')->name('tujuan_perjalanan');
Route::get('/tujuan_perjalanan/tambah', 'TujuanPerjalananController@create')->name('tujuan_perjalanan/tambah');
Route::post('/tujuan_perjalanan/simpan', 'TujuanPerjalananController@store')->name('tujuan_perjalanan/simpan');
Route::get('/tujuan_perjalanan/edit/{id}', 'TujuanPerjalananController@edit')->name('tujuan_perjalanan/edit');
Route::put('/tujuan_perjalanan/{id}', 'TujuanPerjalananController@update')->name('tujuan_perjalanan/update');
Route::get('/tujuan_perjalanan/delete/{id}', 'TujuanPerjalananController@destroy')->name('tujuan_perjalanan/delete');
