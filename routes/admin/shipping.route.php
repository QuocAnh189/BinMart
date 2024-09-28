<?php

use App\Http\Controllers\Backend\ShippingRuleController;
use Illuminate\Support\Facades\Route;

Route::put('shipping-rule/change-status', [ShippingRuleController::class, 'change_status'])->name('shipping-rule.change-status');
Route::resource('shipping-rule', ShippingRuleController::class);
