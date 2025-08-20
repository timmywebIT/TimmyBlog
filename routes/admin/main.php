<?php

use App\Http\Controllers\Admin\Main\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', IndexController::class)->name('index');
