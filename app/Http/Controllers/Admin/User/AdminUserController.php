<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\CreateUserRequest;
use App\Http\Requests\Admin\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.pages.user.index', compact('users'));
    }

    public function create() {
        return view('admin.pages.user.create');
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

        return redirect()->route('admin.user.index');
    }

    public function delete($id) {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Istifadeci tapilmadi'], 404);
        }

        $filename = $user->picture;

        $user->delete();

        if ($filename) {
            $filePath = public_path('storage/pictures/' . $filename);

            // Check if the file exists before attempting to delete it
            if (file_exists($filePath)) {
                unlink($filePath); // Delete the file
            }
        }

        return redirect()->route('admin.user.index');
    }

    public function edit($id) {
        $user = User::findOrFail($id);

        if (!$user) {
            return response()->json(['message' => 'Istifadeci tapilmadi'], 404);
        }

        return view('admin.pages.user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id) {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Kullanıcı bulunamadı'], 404);
        }

        // Validator işlemi yapıldıktan sonra
        $validator = Validator::make($request->all(), $request->rules(), $request->messages());

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        }

        // Eski resim dosyasını sakla
        $oldFileName = $user->picture;

        // Kullanıcı bilgilerini güncelle
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        // Yeni resim dosyası yüklenmiş ise
        if ($request->hasFile('picture')) {
            $newImage = $request->file('picture');

            // Dosya adını benzersiz hale getir
            $newFileName = (int) str_replace('.', '', microtime())[0] . '' . explode(' ', microtime())[1] . '.' . $newImage->getClientOriginalExtension();

            // Resmi sakla
            $newImagePath = $newImage->storeAs('public/pictures', $newFileName);

            // Kullanıcı modelinde resim alanını güncelle
            $user->picture = $newFileName;

            // Eski resim dosyasını sil (varsa)
            if ($oldFileName) {
                Storage::delete('public/pictures/' . $oldFileName);
            }
        }

        // Kullanıcıyı kaydet
        $user->save();

        // Kullanıcı listeleme sayfasına yönlendir
        return redirect()->route('admin.user.index');
    }
}

