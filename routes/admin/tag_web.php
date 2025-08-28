<?php

use App\Http\Controllers\Api\v1\Admin\Tag\web\IndexController;
use Illuminate\Support\Facades\Route;


Route::prefix('tag')->name('tags.')->group(function () {
    Route::get('/', IndexController::class)->name('index');
});
