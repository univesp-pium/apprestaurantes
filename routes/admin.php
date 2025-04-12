<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

// auth routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AuthController::class, 'check']);
    Route::get('/login', [AuthController::class, 'login'])->name('admin.auth.login');
    Route::post('/login', [AuthController::class, 'login_action'])->name('admin.auth.login_action');
    Route::get('/logout', [AuthController::class, 'logout_action'])->name('admin.auth.logout_action');
});

// logged admin routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
});
