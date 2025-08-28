<?php

namespace App\Http\Controllers\Api\v1\Admin\Tag\api;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Tag::all();
    }
}


