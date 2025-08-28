<?php

namespace App\Http\Controllers\Api\v1\Main;

use App\Http\Controllers\Controller;


class PortfolioController extends Controller
{
    public function __invoke()
    {
        return view('pages.portfolio');

    }
}
