<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/homestay', function () {
    return view('homestay');
});

Route::get('/paket', function () {
    return view('paket');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/umkm', function () {
    return view('umkm');
});