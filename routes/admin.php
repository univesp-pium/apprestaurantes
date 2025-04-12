<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;

// auth routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AuthController::class, 'check']);
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login_action'])->name('auth.login_action');
    Route::get('/logout', [AuthController::class, 'logout_action'])->name('auth.logout_action');
});

// logged admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('orders', OrderController::class)->parameters(['orders' => 'order'])->names('orders');
});
