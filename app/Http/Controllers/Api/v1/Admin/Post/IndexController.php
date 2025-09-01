<?php

namespace App\Http\Controllers\Api\v1\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;


class IndexController extends BaseController
{
    public function __invoke()
    {
        return response()->json(['data' => Post::all()]);
    }
}


