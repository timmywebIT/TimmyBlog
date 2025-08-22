<?php

namespace App\Http\Controllers\Main\api\Likes;

use App\Http\Controllers\Controller;
use App\Models\Post;


class DeleteLikeController extends Controller
{
    public function deleteLike(Post $post)
    {
        // временно без авторизации, используем конкретный ID
        $userId = 1; // или любой другой ID из таблицы users

        // убираем лайк (если его нет — просто ничего не произойдет)
        $post->likes()->detach($userId);

        return response()->json([
            'liked' => false,
            'count' => $post->likes()->count()
        ]);
    }
}
