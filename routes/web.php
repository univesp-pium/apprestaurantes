<?php

use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login_action'])->name('auth.login_action');
Route::get('/logout', [AuthController::class, 'logout_action'])->name('auth.logout_action');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register_action'])->name('auth.register_action');

Route::get('/produtos', [ProductController::class, 'index'])->name('products.index');
Route::get('/produtos/{product_slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/carrinho', [CartController::class, 'index'])->name('cart.index');

Route::prefix('area-do-cliente')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/pedidos', [OrderController::class, 'orders'])->name('dashboard.orders');
    Route::get('/pedidos/{order}', [OrderController::class, 'show'])->name('dashboard.orders.show'); // tela de sucesso / também mostra os status dos pedidos
});
