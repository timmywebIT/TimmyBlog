<?php

use App\Api\AuthController;
use App\Http\Controllers\Admin\Tag\api\IndexController;
use App\Http\Controllers\Admin\Tag\api\StoreController;
use App\Http\Controllers\Admin\Tag\api\DeleteController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/me', [AuthController::class, 'me']);
Route::post('/logout', [AuthController::class, 'logout']);


//Показыкат и выводит
Route::prefix('admin')->group(function () {
    Route::get('/tags', IndexController::class)->name('api.admin.tags.index');
    Route::post('/tags', StoreController::class)->name('api.admin.tags.store');
    Route::delete('/tags/{tag}', DeleteController::class)->name('api.admin.tags.delete');
});
