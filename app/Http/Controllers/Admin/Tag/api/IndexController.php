<?php

namespace App\Http\Controllers\Admin\Tag\api;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Tag::all();
    }
}


