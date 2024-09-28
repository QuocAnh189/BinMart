<?php

use App\Http\Controllers\Frontend\WishlistController;
use Illuminate\Support\Facades\Route;

/** Wishlist route */
Route::get('wishlist/add-product', [WishlistController::class, 'add_to_wishlist'])->name('wishlist.add');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('wishlist', [WishlistController::class, 'wishlist_list'])->name('wishlist.list');
    Route::get('wishlist/remove-product/{id}', [WishlistController::class, 'remove_product'])->name('wishlist.remove-product');
});
