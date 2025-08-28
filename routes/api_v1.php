<?php

use App\Http\Controllers\Api\v1\Main\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/posts', IndexController::class);

