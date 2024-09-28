<?php

use App\Http\Controllers\Backend\AdvertisementController;
use Illuminate\Support\Facades\Route;

/** Advertisement Route */
Route::get('advertisement', [AdvertisementController::class, 'index'])->name('advertisement.index');
Route::put('advertisement/homepage-banner-section-one', [AdvertisementController::class, 'homepage_banner_section_one'])->name('homepage-banner-section-one');
Route::put('advertisement/homepage-banner-section-two', [AdvertisementController::class, 'homepage_banner_section_two'])->name('homepage-banner-section-two');
Route::put('advertisement/homepage-banner-section-three', [AdvertisementController::class, 'homepage_banner_section_three'])->name('homepage-banner-section-three');
Route::put('advertisement/homepage-banner-section-four', [AdvertisementController::class, 'homepage_banner_section_four'])->name('homepage-banner-section-four');
Route::put('advertisement/productpage-banner', [AdvertisementController::class, 'product_page_banner'])->name('productpage-banner');
Route::put('advertisement/cart-page-banner', [AdvertisementController::class, 'cart_page_banner'])->name('cart-page-banner');
