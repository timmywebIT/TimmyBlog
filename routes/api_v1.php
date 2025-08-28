<?php

use App\Http\Controllers\Api\v1\Main\IndexController;
use App\Http\Controllers\Api\v1\Main\ShowPostController;
use Illuminate\Support\Facades\Route;


Route::get('/posts', IndexController::class);
Route::get('/posts/{id}', ShowPostController::class);

