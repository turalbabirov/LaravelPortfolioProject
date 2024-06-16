<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index() {

    }

    public function create($id) {
        $user = User::with('profile')->find($id);

        return view('admin.pages.profile.create', compact('user'));
    }
}
