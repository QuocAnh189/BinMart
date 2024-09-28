<?php

use App\Http\Controllers\Frontend\UserDashboardController;
use Illuminate\Support\Facades\Route;

/** Dashboard route */
Route::post('dashboard', [UserDashboardController::class, 'dashboard'])
    ->prefix('user')
    ->middleware('auth', 'verified')
    ->name('user.dashboard');
