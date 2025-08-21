<?php

namespace App\Http\Controllers\Admin\Category\api;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Category::all();
    }
}


