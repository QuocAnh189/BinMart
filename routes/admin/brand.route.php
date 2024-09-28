<?php

use App\Http\Controllers\Backend\BrandController;
use Illuminate\Support\Facades\Route;

/** Brand Route */
Route::put('brand/change-status', [BrandController::class, 'change_status'])->name('brand.change-status');
Route::resource('brand', BrandController::class);
