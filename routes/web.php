<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ISPController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

// Login Route
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Logout Route
Route::get('logout', [AuthController::class, 'logout']);

// Forgot Password route
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm']);
Route::post('/forgot-password', [AuthController::class, 'forgotpassword'])->name('forgot-password');

// Middleware
Route::group(['middleware' => 'useradmin'], function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    
    Route::get('/isps', [ISPController::class, 'index']);
});