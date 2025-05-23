<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\InstructionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\UnitController;

// auth routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AuthController::class, 'check']);
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login_action'])->name('auth.login_action');
    Route::get('/logout', [AuthController::class, 'logout_action'])->name('auth.logout_action');
});

// logged admin routes
Route::prefix('admin')->middleware(['admin.auth'])->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('pedidos', OrderController::class)->parameters(['pedidos' => 'order'])->names('orders');
    Route::resource('categorias', CategoryController::class)->parameters(['categorias' => 'category'])->names('categories');
    Route::resource('unidades', UnitController::class)->parameters(['unidades' => 'unit'])->names('units');
    Route::resource('produtos', ProductController::class)->parameters(['produtos' => 'product'])->names('products');
    Route::post('/produtos/{product}/images/upload', [ProductImageController::class, 'upload_images'])->name('products.images.upload');
    Route::post('/produtos/{product}/images/reorder', [ProductImageController::class, 'reorder_images'])->name('products.images.reorder');
    Route::delete('/produtos/{product}/images/{image}', [ProductImageController::class, 'delete_images'])->name('products.images.delete');
    Route::put('/produtos/{product}/instrucoes', [ProductController::class, 'update_instructions'])->name('products.instructions.update');
    Route::put('/receitas/{product}/receitas', [ProductController::class, 'update_recipes'])->name('products.recipes.update');
    Route::resource('receitas', RecipeController::class)->parameters(['receitas' => 'recipe'])->names('recipes');
    Route::resource('instrucoes', InstructionController::class)->parameters(['instrucoes' => 'instruction'])->names('instructions');
});
