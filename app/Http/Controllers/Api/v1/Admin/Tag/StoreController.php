<?php

namespace App\Http\Controllers\Api\v1\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;
use function Pest\Laravel\json;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $tag = Tag::firstOrCreate($data);
        return response()->json([
            'success' => true,
            'tag' => $tag
        ]);
    }
}


