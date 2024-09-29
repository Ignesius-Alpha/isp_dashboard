<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

// Route::get('/', [AuthController::class, 'login'])->name('login');
// Route::get('/forgot_password', [AuthController::class, 'forgot_password'])->name('forgot_password');
// Login route
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Forgot Password route
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm']);
Route::post('/forgot-password', [AuthController::class, 'forgotpassword'])->name('forgot-password');