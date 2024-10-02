<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoverageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ActiveserviceController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\CANewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ISPController;
use App\Http\Controllers\QLSController;
use App\Http\Controllers\RolePermissionsController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\AuditTrailController;
use App\Http\Controllers\UserProfilesController;
use App\Http\Controllers\AccountsController;
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
    Route::get('/account', [AccountsController::class, 'index']);
    Route::get('/activeservices', [ActiveserviceController::class, 'index']);
    Route::get('/audit-trail', [AuditTrailController::class, 'index']);
    Route::get('/canews', [CANewsController::class, 'index']);
    Route::get('/company-profile', [CompanyProfileController::class, 'index']);
    Route::get('/coverage', [CoverageController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/finance', [FinanceController::class, 'index']);
    Route::get('/isps', [ISPController::class, 'index']);
    Route::get('/linksearch', [QLSController::class, 'index']);
    Route::get('/marketing', [MarketingController::class, 'index']);
    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('/reports', [ReportController::class, 'index']);
    Route::get('/resources', [ResourceController::class, 'index']);
    Route::get('/role-permissions', [RolePermissionsController::class, 'index']);
    Route::get('/role-permissions/update', [RolePermissionsController::class, 'updatePermissions']);
    Route::get('/support', [SupportController::class, 'index']);
    Route::get('/user-profiles', [UserProfilesController::class, 'index']);
    Route::get('/user-profiles/create-user', [UserProfilesController::class, 'createUser']);
    Route::get('/user-profiles/update-user', [UserProfilesController::class, 'updateUser']);
});