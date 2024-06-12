<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Admin\CreateUserRequest;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.pages.profile.index', compact('users'));
    }

    public function create() {
        return view('admin.pages.profile.create');
    }

    public function store(CreateUserRequest $request) {
        $validator = Validator::make($request->all(), $request->rules(), $request->messages());

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        }

        if ($request->hasFile('picture')) {
            $newImage = $request->file('picture');
            $uniqueName = (int) str_replace('.', '', microtime())[0] . '' . explode(' ', microtime())[1];
            $newFileName = $uniqueName . '.' . $newImage->getClientOriginalExtension();
            $newImagePath = $newImage->storeAs('public/pictures', $newFileName);
        } else {
            $newFileName = null;
            $newImagePath = null;
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->picture = $newFileName;
        $user->save();

        return redirect()->route('admin.profile.index');
    }

    public function delete($id) {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Istifadeci tapilmadi'], 404);
        }

        $user->delete();

        return redirect()->route('admin.profile.index');
    }

    public function edit($id) {
        $user = User::findOrFail($id);

        if (!$user) {
            return response()->json(['message' => 'Istifadeci tapilmadi'], 404);
        }

        return view('admin.pages.profile.edit', compact('user'));
    }

    public function update(CreateUserRequest $request, $id) {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Istifadeci tapilmadi'], 404);
        }

        $user->update($request->all());

        return redirect()->route('admin.profile.index');
    }
}
