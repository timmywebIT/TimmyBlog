<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ReaderMiddleware;

//admin
//Route::prefix('admin')->name('admin.')->middleware('auth', AdminMiddleware::class)->group(function () {
////    require __DIR__ . '/admin/main.php';
//    require __DIR__ . '/admin/category_web.php';
//    require __DIR__ . '/admin/post.php';
//    require __DIR__ . '/admin/tag_web.php';
//});


Route::fallback(function () {
    return view('layouts.app');
});
