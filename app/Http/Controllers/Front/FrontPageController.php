<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        $users = User::with('profile', 'expertise', 'skills', 'experiences', 'projectCategories', 'projects', 'courses', 'social')
            ->get()->where('activestatus', 1);
        $users = $users[0];

        return view('front.pages.index', compact('users'));
    }
}
