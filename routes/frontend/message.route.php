<?php

use App\Http\Controllers\Frontend\UserMessageController;
use Illuminate\Support\Facades\Route;

/** Message route */
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('messages', [UserMessageController::class, 'messages_list'])->name('messages.list');
    Route::post('send-message', [UserMessageController::class, 'send_message'])->name('send-message');
    Route::get('get-messages', [UserMessageController::class, 'get_message'])->name('get-messages');
});
