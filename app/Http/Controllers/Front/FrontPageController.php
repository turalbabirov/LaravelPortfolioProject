<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        $user = User::with('profile', 'expertise', 'skills', 'experiences', 'projectCategories', 'projects', 'courses', 'social')
            ->get()->where('activestatus', 1);
        $user = $user->isEmpty() ? null : $user->first();
//        dd($user);

        return view('front.pages.index', compact('user'));
    }
}
