<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Post\IndexController;
use App\Http\Controllers\Admin\Post\CreateController;

Route::prefix('post')->name('posts.')->group(function () {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/create', CreateController::class)->name('create');
//    Route::post('/', StoreController::class)->name('store');
});

