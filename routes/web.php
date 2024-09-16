<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ChatController::class, 'index'])->name('dashboard');
    Route::Post('/search/users', [ChatController::class, 'search'])->name('search.user');
    Route::get('get/user/{user}',  [ChatController::class, 'getUser'])->name('get.user');
    Route::get('create/{chat}/chat/scene',  [ChatController::class, 'createChatScene'])->name('create.chat.scene');

    Route::post('/chats/{chat}/messages', [ChatController::class, 'sendMessage'])->name('send.message');

    Route::get('/chats', [ChatController::class, 'chats'])->name('chats');
    Route::post('/chats', [ChatController::class, 'createGroupChat'])->name('chats.create');
    Route::get('/users', [ChatController::class, 'getUsers'])->name('users');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
