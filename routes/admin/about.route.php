<?php

use App\Http\Controllers\Backend\AboutController;
use Illuminate\Support\Facades\Route;

/** About Route */
Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::put('about/update', [AboutController::class, 'update'])->name('about.update');
