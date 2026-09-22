<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/profile', function () {
    return view('page.profile');
});

Route::get('/project', function () {
    return view('page.project');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);