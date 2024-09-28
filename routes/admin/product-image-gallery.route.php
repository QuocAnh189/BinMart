<?php

use App\Http\Controllers\Backend\ProductImageGalleryController;
use Illuminate\Support\Facades\Route;

Route::resource('products-image-gallery', ProductImageGalleryController::class);
