<<?php

use Illuminate\Support\Facades\Route;


// Halaman utama
Route::get('/', function () {
    return view('welcome');
});


// Fitur Login
Route::get('/login', function () {
    return view('login');
});


// Fitur Product
Route::get('/product', function () {
    return view('product');
});