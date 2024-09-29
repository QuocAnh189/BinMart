<?php

use App\Http\Controllers\Backend\VendorMessageController;
use Illuminate\Support\Facades\Route;

/** Message route */
Route::get('messages', [VendorMessageController::class, 'index'])->name('messages.index');
Route::post('send-message', [VendorMessageController::class, 'send_message'])->name('send-message');
Route::get('get-messages', [VendorMessageController::class, 'get_messages'])->name('get-messages');
