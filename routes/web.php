<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('login'));

// Pages réservées aux visiteurs non connectés
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Pages réservées aux utilisateurs connectés (2 routes protégées)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
    Route::get('/profile', fn () => view('profile'))->name('profile');
});

// Action de déconnexion
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');