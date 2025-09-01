<?php

use App\Http\Controllers\Api\v1\Admin\Tag\IndexController;
use App\Http\Controllers\Api\v1\Admin\Tag\StoreController;
use App\Http\Controllers\Api\v1\Admin\Tag\UpdateController;
use App\Http\Controllers\Api\v1\Admin\Tag\DeleteController;
use Illuminate\Support\Facades\Route;

Route::get('/tags', IndexController::class);
Route::post('/tags', StoreController::class);
Route::patch('/tags/{tag}', UpdateController::class);
Route::delete('/tags/{tag}', DeleteController::class);
