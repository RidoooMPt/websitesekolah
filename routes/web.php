<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('tentang');
});

Route::get('/', function () {
    return view('akademik');
});

Route::get('/', function () {
    return view('profil_guru');
});

Route::get('/', function () {
    return view('pendaftaran');
});