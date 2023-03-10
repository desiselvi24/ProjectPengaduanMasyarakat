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

Route::get('/beranda','BerandaController@index');

//tanggapan
Route::get('/tanggapan','TanggapanController@index');
Route::get('/tanggapan/create','TanggapanController@create');
Route::post('/tanggapan/store','TanggapanController@store');
Route::get('/tanggapan/edit/{id}', 'TanggapanController@edit');
Route::put('/tanggapan/update/{id}', 'TanggapanController@update');


//pengaduan
Route::get('/pengaduan', 'PengaduanController@index');
Route::get('/pengaduan/create', 'PengaduanController@create')->name('/pengaduan/create');
Route::post('/pengaduan/store', 'PengaduanController@store');
Route::get('/pengaduan/edit/{id_pengaduan}', 'PengaduanController@edit');
Route::put('/pengaduan/update/{id_pengaduan}', 'PengaduanController@update');
Route::get('/pengaduan/destroy/{id_pengaduan}', 'PengaduanController@destroy');

