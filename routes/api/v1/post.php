<?php

use App\Http\Controllers\Api\v1\Admin\Post\IndexController;
use App\Http\Controllers\Api\v1\Admin\Post\StoreController;
use App\Http\Controllers\Api\v1\Admin\Post\DeleteController;

use Illuminate\Support\Facades\Route;

Route::get('/posts', IndexController::class);
Route::post('/posts', StoreController::class);
Route::delete('/posts/{post}', DeleteController::class);

