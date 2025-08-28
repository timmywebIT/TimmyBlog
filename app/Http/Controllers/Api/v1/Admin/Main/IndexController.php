<?php

namespace App\Http\Controllers\Api\v1\Admin\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('admin.index');
    }
}
