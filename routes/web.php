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
    echo 'Selamat Datang'; 
});

Route::get('/about', function () {
    echo 'NIM : 2041720172<br>Nama : Nurlaily Asrobika<br>Kelas : TI-2B'; 
});

Route::get('/articles/{id}', function ($id=null) {
    return "Ini adalah halaman artikel dengan id = " .$id;
});