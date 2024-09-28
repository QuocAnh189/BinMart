<?php

use App\Http\Controllers\Frontend\UserOrderController;
use Illuminate\Support\Facades\Route;

/** Order route */
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('orders', [UserOrderController::class, 'order_list'])->name('order.list');
    Route::get('orders/show/{id}', [UserOrderController::class, 'show_order'])->name('orders.show');
});
