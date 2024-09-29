<?php

use App\Http\Controllers\Frontend\UserDashboardController;
use Illuminate\Support\Facades\Route;

/** Dashboard route */
Route::get('dashboard', [UserDashboardController::class, 'dashboard'])
    ->prefix('user')
    ->middleware('auth', 'verified')
    ->name('user.dashboard');
