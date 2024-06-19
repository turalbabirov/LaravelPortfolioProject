<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        $formData = $request->all();
        $user = User::with('profile')->find($formData['user_id']);

        // Profil yoksa yeni profil oluştur
        $profile = new Profile();
        $profile->user_id = $user->id;

        $profile->address = $formData['address'];
        $profile->phone = $formData['phone'];
        $profile->birthday_date = $formData['birthday'];
        $profile->about_user = $formData['about'];
        $profile->freelance = isset($formData['freelance']) ? true : false;
        $profile->degree = $formData['degree'];
        $profile->experience = $formData['experience'];
        $profile->save();

        // Skills kaydetme
        foreach ($formData['skill'] ?? [] as $skillName) {
            $skill = new Skill(['name' => $skillName]);
            $profile->skills()->save($skill);
        }

        // Experiences kaydetme
        foreach ($formData['experiences'] ?? [] as $experienceData) {
            $experience = new Experience($experienceData);
            $profile->experiences()->save($experience);
        }

        // Projects kaydetme
        foreach ($this->processProjects($formData['projects'] ?? []) as $projectData) {
            $project = new Project($projectData);
            $profile->projects()->save($project);
        }

        // Courses kaydetme
        foreach ($this->processCourses($formData['courses'] ?? []) as $courseData) {
            $course = new Course($courseData);
            $profile->courses()->save($course);
        }

        // Socials kaydetme
        foreach ($formData['socials'] ?? [] as $socialData) {
            $social = new Social($socialData);
            $profile->socials()->save($social);
        }

        return response()->json(['message' => 'Profil ve ilişkili veriler başarıyla kaydedildi']);
    }
}
