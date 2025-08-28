<?php

namespace App\Http\Controllers\Api\v1\Main;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;


class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::with('category', 'tags')->get();
        return PostResource::collection($posts);

    }
}
