<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');

/** Frontend Route*/
require __DIR__.'/frontend/vendor.route.php';
require __DIR__.'/frontend/flash-sale.route.php';
require __DIR__.'/frontend/product.route.php';
require __DIR__.'/frontend/newsletter.route.php';
require __DIR__.'/frontend/page.route.php';
require __DIR__.'/frontend/cart.route.php';
require __DIR__.'/frontend/product-tracking.route.php';
require __DIR__.'/frontend/blog.route.php';
require __DIR__.'/frontend/product-modal.route.php';
require __DIR__.'/frontend/wishlist.route.php';
require __DIR__.'/frontend/dashboard.route.php';
require __DIR__.'/frontend/profile.route.php';
require __DIR__.'/frontend/message.route.php';
require __DIR__.'/frontend/address.route.php';
require __DIR__.'/frontend/order.route.php';
require __DIR__.'/frontend/review.route.php';
require __DIR__.'/frontend/payment.route.php';
