<?php

namespace App\Http\Controllers\Api\v1\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;
use function Pest\Laravel\json;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
       return response()->json('Тут');
    }
}


