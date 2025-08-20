<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;


class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('main.blog', compact('categories'));

    }
}
