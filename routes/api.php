<?php

use App\Api\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Main\IndexController as MainController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/me', [AuthController::class, 'me']);
Route::post('/logout', [AuthController::class, 'logout']);


//Route::prefix('admin')->group(function () {
//    Route::get('/tags', IndexController::class)->name('api.admin.tags.index');
//    Route::post('/tags', StoreController::class)->name('api.admin.tags.store');
//    Route::delete('/tags/{tag}', DeleteController::class)->name('api.admin.tags.delete');
//});
//
//Route::prefix('admin')->group(function () {
//    Route::get('/categories', CategoryController::class)->name('api.admin.categories.index');
//    Route::post('/categories', CategoryStoreController::class)->name('api.admin.categories.store');
//    Route::delete('/categories/{category}', CategoryDeleteController::class)->name('api.admin.categories.delete');
//});

//Route::post('/posts/{post}/like', [LikeController::class, 'store']);
//Route::delete('/posts/{post}/like', [DeleteLikeController::class, 'deleteLike']);

Route::prefix('v1')->group(function () {
    require __DIR__.'/api/v1/tag.php';
});



