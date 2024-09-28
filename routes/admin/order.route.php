<?php

use App\Http\Controllers\Backend\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('payment-status', [OrderController::class, 'change_payment_status'])->name('payment.status');
Route::get('order-status', [OrderController::class, 'change_order_status'])->name('order.status');

Route::get('pending-orders', [OrderController::class, 'pending_orders'])->name('pending-orders');
Route::get('processed-orders', [OrderController::class, 'processed_orders'])->name('processed-orders');
Route::get('dropped-off-orders', [OrderController::class, 'dropped_of_orders'])->name('dropped-off-orders');

Route::get('shipped-orders', [OrderController::class, 'shipped_orders'])->name('shipped-orders');
Route::get('out-for-delivery-orders', [OrderController::class, 'out_for_delivery_orders'])->name('out-for-delivery-orders');
Route::get('delivered-orders', [OrderController::class, 'delivered_orders'])->name('delivered-orders');
Route::get('canceled-orders', [OrderController::class, 'canceled_orders'])->name('canceled-orders');
Route::resource('order', OrderController::class);
