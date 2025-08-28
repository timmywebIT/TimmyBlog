<?php

namespace App\Http\Controllers\Api\v1\Admin\Post;

use App\Http\Requests\Admin\Post\StoreRequest;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($request, $data);
        return redirect()->route('admin.posts.index');
    }
}
