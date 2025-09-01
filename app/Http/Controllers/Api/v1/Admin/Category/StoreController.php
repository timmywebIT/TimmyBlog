<?php

namespace App\Http\Controllers\Api\v1\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use function Pest\Laravel\json;

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


