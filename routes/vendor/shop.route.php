<?php

use App\Http\Controllers\Backend\VendorShopProfileController;
use Illuminate\Support\Facades\Route;

Route::resource('shop-profile', VendorShopProfileController::class);
