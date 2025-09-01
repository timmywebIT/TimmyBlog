<?php

use App\Http\Controllers\Api\v1\Admin\Post\IndexController;
use App\Http\Controllers\Api\v1\Admin\Post\StoreController;
//use App\Http\Controllers\Api\v1\Admin\Post\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/posts', IndexController::class);
//Route::get('/posts/{id}', ShowPostController::class);
Route::post('/posts', StoreController::class);

