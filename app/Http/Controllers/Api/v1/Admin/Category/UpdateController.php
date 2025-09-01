<?php

namespace App\Http\Controllers\Api\v1\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return response()->json([
            'success' => true,
            'category' => $category
        ]);
    }
}


