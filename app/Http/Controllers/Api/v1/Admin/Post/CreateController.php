<?php

namespace App\Http\Controllers\Api\v1\Admin\Post;

use App\Models\Category;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }
}
