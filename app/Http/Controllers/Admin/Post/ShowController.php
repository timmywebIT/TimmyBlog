<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;


class ShowController extends Controller
{
    public function __invoke()
    {

        return view('admin.post.show');
    }
}
