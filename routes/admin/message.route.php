<?php

use App\Http\Controllers\Backend\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
Route::get('get-messages', [MessageController::class, 'get_messages'])->name('get-messages');
Route::post('send-message', [MessageController::class, 'send_message'])->name('send-message');
