<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return redirect()->route(auth()->check() ? 'home' : 'login');
});

Route::get('/home', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');
