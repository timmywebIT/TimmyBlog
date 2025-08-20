<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;



class IndexController extends Controller
{
    public function __invoke()
    {
        $user = Auth()->user();
        return view('personal.index', compact('user'));
    }
}
