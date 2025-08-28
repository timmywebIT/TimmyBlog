<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ReaderMiddleware;


Route::get('/{any}', function () {
    return view('layouts.app'); // app.blade.php
})->where('any', '.*');

//admin
//Route::prefix('admin')->name('admin.')->middleware('auth', AdminMiddleware::class)->group(function () {
////    require __DIR__ . '/admin/main.php';
//    require __DIR__ . '/admin/category_web.php';
//    require __DIR__ . '/admin/post.php';
//    require __DIR__ . '/admin/tag_web.php';
//});



