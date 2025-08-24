<?php

use App\Api\AuthController;
use App\Http\Controllers\Admin\Category\api\DeleteController as CategoryDeleteController;
use App\Http\Controllers\Admin\Category\api\IndexController as CategoryController;
use App\Http\Controllers\Admin\Category\api\StoreController as CategoryStoreController;
use App\Http\Controllers\Admin\Tag\api\DeleteController;
use App\Http\Controllers\Admin\Tag\api\IndexController;
use App\Http\Controllers\Admin\Tag\api\StoreController;
use App\Http\Controllers\Main\api\Likes\DeleteLikeController;
use App\Http\Controllers\Main\api\Likes\LikeController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/me', [AuthController::class, 'me']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::prefix('admin')->group(function () {
    Route::get('/tags', IndexController::class)->name('api.admin.tags.index');
    Route::post('/tags', StoreController::class)->name('api.admin.tags.store');
    Route::delete('/tags/{tag}', DeleteController::class)->name('api.admin.tags.delete');
});

Route::prefix('admin')->group(function () {
    Route::get('/categories', CategoryController::class)->name('api.admin.categories.index');
    Route::post('/categories', CategoryStoreController::class)->name('api.admin.categories.store');
    Route::delete('/categories/{category}', CategoryDeleteController::class)->name('api.admin.categories.delete');
});

Route::post('/posts/{post}/like', [LikeController::class, 'store']);
Route::delete('/posts/{post}/like', [DeleteLikeController::class, 'deleteLike']);


