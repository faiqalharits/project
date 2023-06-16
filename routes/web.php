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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('tampilan','layouts.template');

// Departemen
Route::resource('/departemen', DepartemenController::class);

// Berita
Route::resource('/berita', BeritaController::class);

// Masyarakat
Route::resource('/masyarakat', MasyarakatController::class);

// Profile
Route::resource('/profile', ProfileController::class);

// Pengaduan
Route::resource('/pengaduan', PengaduanController::class);
