<?php

namespace App\Http\Controllers\Api\v1\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DeleteController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post deleted successfully'
        ]);
    }
}


