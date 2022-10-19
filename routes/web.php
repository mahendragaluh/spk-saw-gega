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
    return view('dashboard');
});

Route::get('/data-mahasiswa', function () {
    return view('dataMahasiswa');
});

Route::get('/kriteria', function () {
    return view('kriteria');
});

Route::get('/subkriteria', function () {
    return view('subkriteria');
});

Route::get('/nilai-data', function () {
    return view('nilaiData');
});

Route::get('/hasil', function () {
    return view('hasil');
});

Route::get('/login', function () {
    return view('login');
});
