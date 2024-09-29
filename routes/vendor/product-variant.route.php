<?php

use App\Http\Controllers\Backend\VendorProductVariantController;
use Illuminate\Support\Facades\Route;

/** Product Variant route */
Route::put('products-variant/change-status', [VendorProductVariantController::class, 'change_status'])->name('products-variant.change-status');
Route::resource('products-variant', VendorProductVariantController::class);
