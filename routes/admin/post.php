<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Post\IndexController;
use App\Http\Controllers\Admin\Post\CreateController;
use App\Http\Controllers\Admin\Post\StoreController;
use App\Http\Controllers\Admin\Post\DeleteController;
use App\Http\Controllers\Admin\Post\ShowController;

Route::prefix('post')->name('posts.')->group(function () {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/create', CreateController::class)->name('create');
    Route::get('/posts/{post}', ShowController::class)->name('show');
    Route::post('/', StoreController::class)->name('store');
    Route::delete('/{post}', DeleteController::class)->name('delete');
});

