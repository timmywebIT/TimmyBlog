<?php

namespace App\Http\Controllers\Admin\Category\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $category = Category::firstOrCreate($data);
        return response()->json([
            'success' => true,
            'category' => $category
        ]);
    }
}
