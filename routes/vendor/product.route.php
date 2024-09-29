<?php

use App\Http\Controllers\Backend\VendorProductController;
use Illuminate\Support\Facades\Route;

/** Product route */
Route::get('product/get-subcategories', [VendorProductController::class, 'get_sub_categories'])->name('product.get-subcategories');
Route::get('product/get-child-categories', [VendorProductController::class, 'get_child_categories'])->name('product.get-child-categories');
Route::put('product/change-status', [VendorProductController::class, 'change_status'])->name('product.change-status');
Route::resource('products', VendorProductController::class);
