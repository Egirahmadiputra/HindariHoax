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
    return view('beranda/home');
});

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::post('/', 'App\Http\Controllers\HomeController@store');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin/dashboard');
})->name('dashboard');

Route::get('/humas_foh', 'App\Http\Controllers\NewsController@index');

Route::get('/humas_foh/create', 'App\Http\Controllers\NewsController@create');

Route::post('humas_foh/', 'App\Http\Controllers\NewsController@store');

Route::get('humas_foh/{id}', 'App\Http\Controllers\NewsController@edit');

Route::put('humas_foh/{id}', 'App\Http\Controllers\NewsController@update');

Route::get('humas_foh/delete/{id}', 'App\Http\Controllers\NewsController@destroy');



Route::get('/laporan', function () {
    return view('beranda/laporan');
});

Route::get('/laporanHoax', 'App\Http\Controllers\LaporanController@index');

Route::get('/laporanHoax/create', 'App\Http\Controllers\LaporanController@create');

Route::post('laporanHoax/', 'App\Http\Controllers\LaporanController@store');

Route::get('laporanHoax/delete/{id}', 'App\Http\Controllers\LaporanController@destroy');



Route::get('/pertanyaan', function () {
    return view('beranda/pertanyaan');
});

Route::get('/pertanyaan', 'App\Http\Controllers\PertanyaanController@eindex');

Route::get('/pertanyaan/create', 'App\Http\Controllers\PertanyaanController@create');

Route::post('pertanyaan/', 'App\Http\Controllers\PertanyaanController@store');

Route::get('/daftar_pertanyaan', 'App\Http\Controllers\PertanyaanController@index');

Route::get('daftar_pertanyaan/{id}', 'App\Http\Controllers\PertanyaanController@edit');

Route::put('daftar_pertanyaan/{id}', 'App\Http\Controllers\PertanyaanController@update');

Route::get('daftar_pertanyaan/delete/{id}', 'App\Http\Controllers\PertanyaanController@destroy');



Route::get('contacts', function () {
    return view('beranda/contacts');
});

