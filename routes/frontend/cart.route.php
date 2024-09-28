<?php

use App\Http\Controllers\Frontend\CartController;
use Illuminate\Support\Facades\Route;

/** Cart route */
Route::post('add-to-cart', [CartController::class, 'add_to_cart'])->name('add-to-cart');
Route::get('cart-details', [CartController::class, 'cart_details'])->name('cart.details');
Route::post('cart/update-quantity', [CartController::class, 'update_product_qty'])->name('cart.update-quantity');
Route::get('clear-cart', [CartController::class, 'clear_cart'])->name('clear.cart');
Route::get('cart/remove-product/{rowId}', [CartController::class, 'remove_product'])->name('cart.remove-product');
Route::get('cart-count', [CartController::class, 'get_cart_count'])->name('cart-count');
Route::get('cart-products', [CartController::class, 'get_cart_products'])->name('cart-products');
Route::post('cart/remove-sidebar-product', [CartController::class, 'remove_sidebar_product'])->name('cart.remove-sidebar-product');
Route::get('cart/sidebar-product-total', [CartController::class, 'cart_total'])->name('cart.sidebar-product-total');

/** Coupon route */
Route::get('apply-coupon', [CartController::class, 'coupon_apply'])->name('coupon.apply');
Route::get('coupon-calculation', [CartController::class, 'coupon_calculation'])->name('coupon.calculation');
