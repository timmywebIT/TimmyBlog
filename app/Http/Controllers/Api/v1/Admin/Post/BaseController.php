<?php

namespace App\Http\Controllers\Api\v1\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Service\PostService;


class BaseController extends Controller
{
    public $service;
    public function __construct(PostService $service)
    {
        $this->service = $service;
    }
}


