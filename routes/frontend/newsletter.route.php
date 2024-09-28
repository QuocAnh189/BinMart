<?php

use App\Http\Controllers\Frontend\NewsletterController;
use Illuminate\Support\Facades\Route;

/** Flash-sale route */
Route::post('newsletter-request', [NewsletterController::class, 'newsLetter_request'])->name('newsletter-request');
Route::get('newsletter-verify/{token}', [NewsletterController::class, 'newsLetter_email_verify'])->name('newsletter-verify');
