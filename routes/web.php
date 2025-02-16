<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.app.dashboard');
});

Route::get('/login', function () {
    return view('pages.auth.auth-login');
});


Route::get('index', [UserController::class, 'index'])->name('index');