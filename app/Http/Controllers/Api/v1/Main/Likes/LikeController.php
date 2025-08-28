<?php

namespace App\Http\Controllers\Api\v1\Main\Likes;

use App\Http\Controllers\Controller;
use App\Models\Post;


class LikeController extends Controller
{
    public function store(Post $post)
    {

        $userId = 1;
//        $user = auth()->user();

//        if (!$user) {
//            return response()->json(['error' => 'Unauthorized'], 401);
//        }

        $post->likes()->toggle($userId);

        return response()->json([
            'liked' => $post->likes()->where('user_id', $userId)->exists(),
            'count' => $post->likes()->count()
        ]);
    }
}
