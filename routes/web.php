<?php

use App\Http\Controllers\Personal\Main\IndexController;
use App\Http\Controllers\Main\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\ReaderMiddleware;


//personal
Route::prefix('personal')->name('personal.')->middleware('auth', ReaderMiddleware::class)->group(function () {
    Route::get('/', IndexController::class)->name('index');

});
//admin
Route::prefix('admin')->name('admin.')->middleware('auth', AdminMiddleware::class)->group(function () {
    require __DIR__ . '/admin/main.php';
    require __DIR__ . '/admin/category.php';
    require __DIR__ . '/admin/post.php';
    require __DIR__ . '/admin/tag_web.php';
});

//main
Route::get('/', function () {
    return view('main.index');
});

Route::get('/blog', BlogController::class)->name('blog.index');
