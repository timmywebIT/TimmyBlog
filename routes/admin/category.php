<?php

use App\Http\Controllers\Admin\Category\IndexController;
use App\Http\Controllers\Admin\Category\CreateController;
use App\Http\Controllers\Admin\Category\StoreController;
use Illuminate\Support\Facades\Route;


Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/create', CreateController::class)->name('create');
    Route::post('/', StoreController::class)->name('store');
});

