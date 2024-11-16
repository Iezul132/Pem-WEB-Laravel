<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('Beranda');});




Route::get('/Profil', function () {
    return view('Profil');
});

Route::get('/lembaga', function () {
    return view('lembaga');
});
Route::get('/Berita', function () {
    return view('Berita');
});
Route::get('/Kajian', function () {
    return view('Kajian');
});
Route::get('/Galeri', function () {
    return view('Galeri');
});
Route::get('/Karya', function () {
    return view('Karya');
});
Route::get('/Psb', function () {
    return view('Psb');
});
