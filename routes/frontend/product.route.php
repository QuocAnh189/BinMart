<?php

use App\Http\Controllers\Frontend\FrontendProductController;
use Illuminate\Support\Facades\Route;

/** Product route */
Route::get('products', [FrontendProductController::class, 'product_list'])->name('product.list');
Route::get('product-detail/{slug}', [FrontendProductController::class, 'show_product_detail'])->name('product.detail');
Route::get('change-product-list-view', [FrontendProductController::class, 'change_list_view'])->name('change-product-list-view');
