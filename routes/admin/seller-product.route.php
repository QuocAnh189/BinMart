<?php

use App\Http\Controllers\Backend\SellerProductController;
use Illuminate\Support\Facades\Route;

Route::get('seller-products', [SellerProductController::class, 'index'])->name('seller-products.index');
Route::get('seller-pending-products', [SellerProductController::class, 'pending_products'])->name('seller-pending-products.index');
Route::put('change-approve-status', [SellerProductController::class, 'change_approve_status'])->name('change-approve-status');
