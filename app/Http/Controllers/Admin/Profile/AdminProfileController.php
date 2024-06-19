<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index() {
        return view('admin.pages.profile.index');
    }

    public function create($id) {
        $user = User::find($id);
        $projectCategories = $user->projectCategories()->get();

//        $user = User::with('profile')->find($id);
//        $userfind = User::find($id);


        return view('admin.pages.profile.create', compact('user', 'projectCategories'));
    }

    public function store(Request $request) {
        dd($request->all());
        return redirect()->back();
    }
}
