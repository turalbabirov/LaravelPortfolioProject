<?php

namespace App\Http\Controllers\Admin\ProjectCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectCategory\CreateProjectCategoryRequest;
use App\Models\ProjectCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminProjectCategoryController extends Controller
{
    public function index($id) {
        $categories = ProjectCategory::all();
        $user = User::find($id)->fullname;
        return view('admin.pages.projectcategory.index', compact('id', 'categories', 'user'));
    }

    public function store(CreateProjectCategoryRequest $request) {
        $validator = Validator::make($request->all(), $request->rules(), $request->messages());

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        }

        $projectCategory = new ProjectCategory();
        $projectCategory->user_id = $request->id;
        $projectCategory->title = $request->title;
        $projectCategory->save();

        return redirect()->back()->with('id', $request->id);
    }

    public function delete($id) {
        ProjectCategory::destroy($id);
        return redirect()->back();
    }

    public function edit(Request $request, $id) {
        $category = ProjectCategory::find($id);
        $user_id = $request->input('user_id');
        return view('admin.pages.projectcategory.edit', compact('category', 'id', 'user_id'));
    }

    public function update(CreateProjectCategoryRequest $request, $id) {
        $category = ProjectCategory::find($id);

        $validator = Validator::make($request->all(), $request->rules(), $request->messages());

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        }

        $category->title = $request->input('title');
        $category->save();

        return redirect()->route('admin.profile.projectcategory.index', ['id' => $request->input('user_id')]);
    }
}
