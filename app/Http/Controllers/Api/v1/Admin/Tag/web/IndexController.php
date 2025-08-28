<?php

namespace App\Http\Controllers\Api\v1\Admin\Tag\web;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('admin.tag.index'); // твой Blade
    }
}

