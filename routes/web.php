<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/page');
});

Route::middleware(['auth'])->group(function () {
Route::get('/page', [PageController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);
});