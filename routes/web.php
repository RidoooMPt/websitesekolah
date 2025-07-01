<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/akademik', function () {
    return view('akademik');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/SPMB', function () {
    return view('SPMB');
});