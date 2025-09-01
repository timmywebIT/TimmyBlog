<?php

use App\Http\Controllers\Api\v1\Admin\Category\IndexController;
use App\Http\Controllers\Api\v1\Admin\Category\StoreController;
use App\Http\Controllers\Api\v1\Admin\Category\UpdateController;
use App\Http\Controllers\Api\v1\Admin\Category\DeleteController;
use Illuminate\Support\Facades\Route;

Route::get('/categories', IndexController::class);
Route::post('/categories', StoreController::class);
Route::patch('/categories/{category}', UpdateController::class);
Route::delete('/categories/{category}', DeleteController::class);
