<?php

use App\Http\Controllers\Backend\VendorOrderController;
use Illuminate\Support\Facades\Route;

/** Order route */
Route::get('orders', [VendorOrderController::class, 'index'])->name('orders.index');
Route::get('orders/show/{id}', [VendorOrderController::class, 'show'])->name('orders.show');
Route::get('orders/status/{id}', [VendorOrderController::class, 'order_status'])->name('orders.status');
