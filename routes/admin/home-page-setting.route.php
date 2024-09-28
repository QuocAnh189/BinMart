<?php

use App\Http\Controllers\Backend\HomePageSettingController;
use Illuminate\Support\Facades\Route;

/** Homepage Route */
Route::get('home-page-setting', [HomePageSettingController::class, 'index'])->name('home-page-setting');
Route::put('popular-category-section', [HomePageSettingController::class, 'update_popular_category_section'])->name('popular-category-section');
Route::put('product-slider-section-one', [HomePageSettingController::class, 'update_product_slider_section'])->name('product-slider-section-one');
Route::put('product-slider-section-two', [HomePageSettingController::class, 'update_product_slider_section_two'])->name('product-slider-section-two');
Route::put('product-slider-section-three', [HomePageSettingController::class, 'update_product_slider_section_three'])->name('product-slider-section-three');
