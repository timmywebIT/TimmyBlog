<?php

namespace App\Http\Controllers\Api\v1\Admin\Category\api;

use App\Http\Controllers\Controller;
use App\Models\Category;


class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return response()->json([
            'success' => true,
            'message' => 'Категория удалена'
        ]);
    }
}


