<?php

namespace App\Http\Controllers\Api\v1\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Tag;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
//        $data = $request->validated();

        return response()->json([
            'validated' => $request->validated()
        ]);

        $post = $this->service->store($request, $data);

        return response()->json([
            'success' => true,
            'post' => $post
        ]);
    }
}


