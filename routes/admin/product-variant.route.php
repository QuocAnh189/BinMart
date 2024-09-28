<?php

use App\Http\Controllers\Backend\ProductVariantController;
use Illuminate\Support\Facades\Route;

Route::put('products-variant/change-status', [ProductVariantController::class, 'change_status'])->name('products-variant.change-status');
Route::resource('products-variant', ProductVariantController::class);
