<?php

namespace App\Http\Controllers\Api\v1\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;


class DeleteController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag->delete();
        return response()->json([
            'success' => true,
            'tag' => $tag
        ]);
    }
}


