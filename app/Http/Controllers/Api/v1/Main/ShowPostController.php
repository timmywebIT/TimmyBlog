<?php

namespace App\Http\Controllers\Api\v1\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;


class ShowPostController extends Controller
{
    public function __invoke($id)
    {

        $post = Post::findOrFail($id);
        return response()->json(['data' => $post]);

    }
}
