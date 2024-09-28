<?php

use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('product/get-subcategories', [ProductController::class, 'get_sub_categories'])->name('product.get-subcategories');
Route::get('product/get-child-categories', [ProductController::class, 'get_child_categories'])->name('product.get-child-categories');
Route::put('product/change-status', [ProductController::class, 'change_status'])->name('product.change-status');
Route::resource('products', ProductController::class);
