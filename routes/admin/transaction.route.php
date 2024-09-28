<?php

use App\Http\Controllers\Backend\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('transaction', [TransactionController::class, 'index'])->name('transaction');
