<?php

namespace App\Http\Controllers\Api\v1\Admin\Category\web;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('admin.category.index');
    }
}


