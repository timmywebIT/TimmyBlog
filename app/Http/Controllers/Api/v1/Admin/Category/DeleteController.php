<?php

namespace App\Http\Controllers\Api\v1\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;


class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return response()->json([
            'success' => true,
            '$category' => $category
        ]);
    }
}


