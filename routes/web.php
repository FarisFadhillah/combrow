<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/tentang-kami', function () {
    return view('about');
});
Route::get('/jasa-website', function () {
    return view('jasa-web');
});
Route::get('/jasa-design', function () {
    return view('jasa-des');
});
Route::get('/jasa-toko-murah', function () {
    return view('jasa-toko-murah');
});
Route::get('/jasa-optimasi', function () {
    return view('jasa-optimasi');
});
