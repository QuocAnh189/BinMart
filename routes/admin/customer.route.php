<?php

use App\Http\Controllers\Backend\CustomerListController;
use Illuminate\Support\Facades\Route;

/** Customer Route */
Route::get('customer', [CustomerListController::class, 'customer_list'])->name('customer.index');
Route::put('customer/status-change', [CustomerListController::class, 'change_status'])->name('customer.status-change');
