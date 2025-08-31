<?php

use App\Http\Controllers\Api\v1\Admin\Tag\IndexController;
use App\Http\Controllers\Api\v1\Admin\Tag\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/tags', IndexController::class);
Route::get('/tags/{id}', ShowController::class);
Route::post('/tags', StoreController::class);
Route::patch('/tags', StoreController::class);
Route::delete('/tags', StoreController::class);
