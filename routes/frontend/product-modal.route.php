<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

/** Product modal route */
Route::get('show-product-modal/{id}', [HomeController::class, 'show_product_modal'])->name('show-product-modal');
