<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\ProfilController;  
use App\Http\Controllers\SpmbController;

Route::get('/home', function () {
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

Route::get('/organisasi', function () {
    return view('organisasi');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});

Route::get('/kritiknsaran', function () {
    return view('kritiknsaran');
});

Route::resource('/admin/prestasi', PrestasiController::class);
Route::resource('/admin/akademik', PrestasiController::class);
Route::resource('/admin/profil', PrestasiController::class);
Route::resource('/admin/spmb', PrestasiController::class);


Route::get('/admin', function () {
    return view('admin.home');
})->name('admin.dashboard');