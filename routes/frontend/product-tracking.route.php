<?php

use App\Http\Controllers\Frontend\ProductTrackController;
use Illuminate\Support\Facades\Route;

/** Product tracking route */
Route::get('product-tracking', [ProductTrackController::class, 'product_tracking'])->name('product.tracking');
