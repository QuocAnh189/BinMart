<?php

use App\Http\Controllers\Backend\VendorProductImageGalleryController;
use Illuminate\Support\Facades\Route;

/** Product Image Gallery route */
Route::resource('products-image-gallery', VendorProductImageGalleryController::class);
