<?php

namespace App\Http\Controllers\Api\v1\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        return TagResource::collection(Tag::all());
    }
}


