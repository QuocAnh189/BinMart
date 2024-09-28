<?php

use App\Http\Controllers\Backend\SubscribersController;
use Illuminate\Support\Facades\Route;

Route::get('subscribers', [SubscribersController::class, 'index'])->name('subscribers.index');
Route::delete('subscribers/{id}', [SubscribersController::class, 'destroy'])->name('subscribers.destroy');
Route::post('subscribers-send-mail', [SubscribersController::class, 'send_mail'])->name('subscribers-send-mail');
