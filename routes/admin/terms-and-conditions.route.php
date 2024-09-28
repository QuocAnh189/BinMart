<?php

use App\Http\Controllers\Backend\TermsAndConditionController;
use Illuminate\Support\Facades\Route;

Route::get('terms-and-conditions', [TermsAndConditionController::class, 'index'])->name('terms-and-conditions.index');
Route::put('terms-and-conditions/update', [TermsAndConditionController::class, 'update'])->name('terms-and-conditions.update');
