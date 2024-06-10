<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateUserRequest;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index() {
        return view('admin.pages.profile.index');
    }

    public function create() {
        return view('admin.pages.profile.create');
    }

    public function store(CreateUserRequest $request) {
        if ($request->fails()) {
            return redirect()->back()->withErrors($request->messages())->withInput();
        }

        $data = $request->all();

        $fileName = date('Ymd') . '_' . $request->file('picture')->getClientOriginalName();
        $picturePath = $request->file('picture')->storeAs('pictures', $fileName);

        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $password = $request->input('password');

        dd($data);

        return redirect()->route('admin.pages.profile.index');
    }
}
