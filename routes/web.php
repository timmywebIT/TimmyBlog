<?php

use App\Http\Controllers\Main\ShowPostController;
use App\Http\Controllers\Main\PortfolioController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\ReaderMiddleware;


//main
Route::get('/main', IndexController::class)->name('main');
Route::get('/portfolio', PortfolioController::class)->name('portfolio');
Route::get('posts/{post}', ShowPostController::class)->name('show');

//admin
Route::prefix('admin')->name('admin.')->middleware('auth', AdminMiddleware::class)->group(function () {
    require __DIR__ . '/admin/main.php';
    require __DIR__ . '/admin/category_web.php';
    require __DIR__ . '/admin/post.php';
    require __DIR__ . '/admin/tag_web.php';
});



