<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontContactController extends Controller
{
    public function store(Request $request)
    {
        return view('front_files.pages.index');
    }
}
