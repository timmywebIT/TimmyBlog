<?php

use Illuminate\Support\Facades\Route;

 Route::prefix('v1')->group(function () {
       require __DIR__.'/api/v1/main.php';
       require __DIR__.'/api/v1/post.php';
       require __DIR__.'/api/v1/tag.php';
       require __DIR__.'/api/v1/category.php';
 });


