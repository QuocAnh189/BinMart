<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');

require __DIR__.'/vendor/profile.route.php';
require __DIR__.'/vendor/message.route.php';
require __DIR__.'/vendor/shop.route.php';
require __DIR__.'/vendor/product.route.php';
require __DIR__.'/vendor/product-image-gallery.route.php';
require __DIR__.'/vendor/product-variant.route.php';
require __DIR__.'/vendor/product-variant-item.route.php';
require __DIR__.'/vendor/order.route.php';
require __DIR__.'/vendor/review.route.php';
require __DIR__.'/vendor/withdraw.route.php';
