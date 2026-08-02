<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('product');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::put('/products/(product)', [ProductController::class, 'update'])->name('product.update');