<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ChildCategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use Illuminate\Support\Facades\Route;

/** Category Route */
Route::put('change-status', [CategoryController::class, 'change_status'])->name('category.change-status');
Route::resource('category', CategoryController::class);

/** Sub Category Route */
Route::put('subcategory/change-status', [SubCategoryController::class, 'change_status'])->name('sub-category.change-status');
Route::resource('sub-category', SubCategoryController::class);

/** Child Category Route */
Route::put('child-category/change-status', [ChildCategoryController::class, 'change_status'])->name('child-category.change-status');
Route::get('get-subcategories', [ChildCategoryController::class, 'get_sub_categories'])->name('get-subcategories');
Route::resource('child-category', ChildCategoryController::class);
