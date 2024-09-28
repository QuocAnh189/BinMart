<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

/** About route */
Route::get('about', [PageController::class, 'about'])->name('about');

/** Terms and conditions page route */
Route::get('terms-and-conditions', [PageController::class, 'terms_and_condition'])->name('terms-and-conditions');

/** Contact routes */
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::post('contact', [PageController::class, 'handle_contact_form'])->name('contact.handle');
