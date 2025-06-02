<?php

use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\AddressController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login_action'])->name('auth.login_action');
Route::get('/logout', [AuthController::class, 'logout_action'])->name('auth.logout_action');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register_action'])->name('auth.register_action');

Route::get('/produtos', [ProductController::class, 'index'])->name('products.index');
Route::get('/produtos/{product_slug}', [ProductController::class, 'show'])->name('products.show');

Route::prefix('area-do-cliente')->middleware(['client.auth'])->name('client-area.')->group(function () {

    Route::get('/carrinho', [CartController::class, 'index'])->name('cart.index');
    Route::post('/carrinho/adicionar', [CartController::class, 'add_item'])->name('cart.add_item');
    Route::post('/carrinho/remover', [CartController::class, 'delete_item'])->name('cart.del_item');
    Route::get('/carrinho/finalizar', [CartController::class, 'finish_cart'])->name('cart.finish');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/pedidos', [OrderController::class, 'orders'])->name('orders.index');
    Route::get('/pedidos/{order}', [OrderController::class, 'show'])->name('orders.show'); // tela de sucesso / também mostra os status dos pedidos
    Route::resource('/enderecos', AddressController::class)->parameters(['enderecos' => 'address'])->names('addresses');;
});
