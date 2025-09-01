<?php

namespace App\Http\Controllers\Api\v1\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
       return response()->json([
           'success' => true,
           'tag' => $tag
       ]);
    }
}


