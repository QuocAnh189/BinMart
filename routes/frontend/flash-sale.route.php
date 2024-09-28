<?php

use App\Http\Controllers\Frontend\FlashSaleController;
use Illuminate\Support\Facades\Route;

/** Flash-sale route */
Route::get('flash-sale', [FlashSaleController::class, 'flash_sale'])->name('flash-sale');
