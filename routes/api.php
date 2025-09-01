<?php

use App\Api\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Main\IndexController as MainController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/me', [AuthController::class, 'me']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::prefix('v1')->group(function () {
      require __DIR__.'/api/v1/main.php';
      require __DIR__.'/api/v1/post.php';
      require __DIR__.'/api/v1/tag.php';
      require __DIR__.'/api/v1/category.php';
});




