<?php

use App\Http\Controllers\Api\v1\Admin\Category\web\IndexController;
use Illuminate\Support\Facades\Route;


Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', IndexController::class)->name('index');
});

