<?php

use App\Http\Controllers\Backend\WithdrawController;
use App\Http\Controllers\Backend\WithdrawMethodController;
use Illuminate\Support\Facades\Route;

Route::resource('withdraw-method', WithdrawMethodController::class);
Route::get('withdraw', [WithdrawController::class, 'index'])->name('withdraw.index');
Route::get('withdraw/{id}', [WithdrawController::class, 'show'])->name('withdraw.show');
Route::put('withdraw/{id}', [WithdrawController::class, 'update'])->name('withdraw.update');
