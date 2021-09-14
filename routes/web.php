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

Route::get('/', function ($id =1) {
    echo "Selamat Datang";
});

Route::get('about', function ($id =1) {
    echo "NIM  : 2031710095 <br>";
    echo "Nama : Alifah Okta Nur Wardani";
});

Route::get('articles/{id?}', function ($id="1") {
    echo "Halaman Artikel dengan ID " . $id;
});
