<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Profile\ProfileCreateRequest;
use App\Http\Requests\Admin\Profile\ProfileUpdateRequest;
use App\Models\Course;
use App\Models\Experience;
use App\Models\Expertise;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Social;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminProfileController extends Controller
{
    public function index($userId) {
        $user = User::with('projects', 'projectCategories')->find($userId);

        if($user) {
            $projects = $user->projects;
            $categories = $user->projectCategories;
            $categoryData = $categories->mapWithKeys(function ($category) {
                return [
                $category->id => $category->title,
            ];
        });

            return view('admin.pages.profile.index', compact('user', 'projects', 'categoryData'));

        }

        return view('admin.pages.profile.index', compact('user' ));
    }

    public function create($id) {
        $user = User::find($id);
        $projectCategories = $user->projectCategories()->get();

        return view('admin.pages.profile.create', compact('user', 'projectCategories'));
    }


    //ProfileCreateRequest
    public function store(ProfileCreateRequest $request)
    {
        $formData = $request->all();

        $user = User::find($formData['user_id']);
        $userId = $user->id;

        // Profil yoksa yeni profil oluştur
        $profile = new Profile();
        $profile->address = $formData['address'];
        $profile->phone = $formData['phone'];
        $profile->birthday = $formData['birthday'];
        $profile->about = $formData['about'];
        $profile->freelance = $formData['freelance'];
        $profile->degree = $formData['degree'];
        $profile->experience = $formData['experience'];
        $profile->user_id = $user->id;
        $profile->save();

        // Expertise kaydetme
        foreach ($formData['expertise'] ?? [] as $expertiseTitle) {
            Expertise::create([
                'job_title' => $expertiseTitle,
                'user_id' => $userId
            ]);
        }

        // Skills kaydetme
        foreach ($formData['skill'] ?? [] as $skillName) {
            Skill::create([
                'title' => $skillName,
                'user_id' => $userId
            ]);
        }

        // Experiences kaydetme
        foreach ($formData['experiences'] ?? [] as $experienceData) {
            Experience::create([
                'user_id' => $userId,
                'position' => $experienceData['position'],
                'company' => $experienceData['company'],
                'start_date' => $experienceData['fromdate'],
                'end_date' => $experienceData['enddate'],
                'description' => $experienceData['experienceDescription'],
            ]);
        }

        // Projects kaydetme
        foreach ($formData['projects'] as $projectData) {

            if (isset($projectData['projectPhoto']) && $projectData['projectPhoto']->isValid()) {
                $newImage = $projectData['projectPhoto'];
                $extension = $newImage->getClientOriginalExtension();
                $uniqueName = time() . '-' . uniqid('', true);
                $newFileName = $uniqueName . '.' . $extension;
                $newImagePath = $newImage->storeAs('public/project/' . $userId, $newFileName);

                Project::create([
                    'user_id' => $userId,
                    'title' => $projectData['projectTitle'],
                    'url' => $projectData['projectUrl'],
                    'category_id' => $projectData['projectCategory'],
                    'img' => $newFileName,
                    'description' => $projectData['projectDescription'],
                ]);
            } else {
                Project::create([
                    'user_id' => $userId,
                    'title' => $projectData['projectTitle'],
                    'url' => $projectData['projectUrl'],
                    'category_id' => $projectData['projectCategory'],
                    'description' => $projectData['projectDescription'],
                ]);
            }
        }

        // Courses kaydetme
        foreach ($formData['courses'] as $courseData) {

            if (isset($courseData['courseImage']) && $courseData['courseImage']->isValid()) {
                $newImage = $courseData['courseImage'];
                $extension = $newImage->getClientOriginalExtension();
                $uniqueName = time() . '-' . uniqid('', true);
                $newFileName = $uniqueName . '.' . $extension;
                $newImagePath = $newImage->storeAs('public/course/' . $userId, $newFileName);

                Course::create([
                    'user_id' => $userId,
                    'name' => $courseData['courseName'],
                    'learn' => $courseData['learnCourse'],
                    'logo' => $newFileName,
                    'describe' => $courseData['courseDescription'],
                ]);
            } else {
                Course::create([
                    'user_id' => $userId,
                    'name' => $courseData['courseName'],
                    'learn' => $courseData['learnCourse'],
                    'describe' => $courseData['courseDescription'],
                ]);
            }
        }

        // Socials kaydetme
        foreach ($formData['socials'] as $platform => $link) {
            if (empty($link)) {
                continue;
            }

            $existingSocial = Social::where('url', $link)->first();
            if ($existingSocial) {
                return redirect()->back()->withErrors(['socials' => 'Bu URL ile daha önce bir sosyal medya hesabı eklenmiş.'])->withInput();
            }

            Social::create([
                'user_id' => $userId,
                'platform' => key($link)[0],
                'url' => array_values($link)[0],
            ]);
        }


        return redirect()->route('admin.user.index')->with('success', 'Kullanıcı başarıyla oluşturuldu.');
    }


    public function delete($id)
    {
        $user = User::findOrFail($id);

        $user->activestatus = 0;

        // Kullanıcının sahip olduğu profili sil
        $user->profile()->delete();

        // Kullanıcının sahip olduğu sosyal medya hesabını sil
        $user->social()->delete();

        // Kullanıcının sahip olduğu becerileri sil
        $user->skills()->delete();

        // Kullanıcının sahip olduğu uzmanlıkları sil
        $user->expertise()->delete();

        // Kullanıcının sahip olduğu deneyimleri sil
        $user->experiences()->delete();

        // Kullanıcının sahip olduğu projeleri ve bu projelere ait fotoğrafları sil
        $projects = $user->projects()->get();
        foreach ($projects as $project) {
            // Proje klasörünü ve içindeki fotoğrafları sil
            Storage::deleteDirectory('public/project/' . $user->id . '/' . $project->id);
            $project->delete();
        }

        // Kullanıcının sahip olduğu kursları ve bu kurslara ait fotoğrafları sil
        $courses = $user->courses()->get();
        foreach ($courses as $course) {
            // Kurs klasörünü ve içindeki fotoğrafları sil
            Storage::deleteDirectory('public/course/' . $user->id . '/' . $course->id);
            $course->delete();
        }

        return redirect()->route('admin.user.index');
    }


    //Asagidaki kodlara baxarsan: #########################################################################################
    #######################################################################################################################
    public function edit($id)
    {
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.user.index')->withErrors(['error' => 'Kullanıcı bulunamadı.'])->withInput();
        }

        $user = User::findOrFail($id);

        // Kullanıcıya ait profili getiriyoruz. Eğer profil yoksa boş bir profil oluşturabilirsiniz.
        $profile = $user->profile()->firstOrCreate([]);

        // Kullanıcının sahip olduğu sosyal medya hesaplarını getiriyoruz.
        $socials = $user->social()->get();

        // Kullanıcının sahip olduğu becerileri getiriyoruz.
        $skills = $user->skills()->get();

        // Kullanıcının sahip olduğu uzmanlıkları getiriyoruz.
        $expertises = $user->expertises()->get();

        // Kullanıcının sahip olduğu deneyimleri getiriyoruz.
        $experiences = $user->experiences()->get();

        // Kullanıcının sahip olduğu projeleri getiriyoruz.
        $projects = $user->projects()->get();

        // Kullanıcının sahip olduğu kursları getiriyoruz.
        $courses = $user->courses()->get();

        return view('admin.user.edit', compact('user', 'profile', 'socials', 'skills', 'expertises', 'experiences', 'projects', 'courses'));
    }

    public function update(ProfileUpdateRequest $request, $id)
    {
        $formData = $request->validated();

        $validator = Validator::make(['id' => $id], [
            'id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::findOrFail($id);

        // Profil güncelleme
        $profile = $user->profile;
        $profile->fill($formData);
        $profile->freelance = isset($formData['freelance']) ? true : false;
        $profile->save();

        // Uzmanlıkları güncelleme
        $user->expertises()->delete();
        foreach ($formData['expertise'] ?? [] as $expertiseTitle) {
            Expertise::create([
                'job_title' => $expertiseTitle,
                'user_id' => $user->id
            ]);
        }

        // Becerileri güncelleme
        $user->skills()->delete();
        foreach ($formData['skill'] ?? [] as $skillName) {
            Skill::create([
                'title' => $skillName,
                'user_id' => $user->id
            ]);
        }

        // Deneyimleri güncelleme
        $user->experiences()->delete();
        foreach ($formData['experiences'] ?? [] as $experienceData) {
            Experience::create([
                'user_id' => $user->id,
                'position' => $experienceData['position'],
                'company' => $experienceData['company'],
                'start_date' => $experienceData['fromdate'],
                'end_date' => $experienceData['enddate'],
                'description' => $experienceData['experienceDescription'],
            ]);
        }

        // Projeleri güncelleme
        $user->projects()->delete();
        foreach ($formData['projects'] as $projectData) {
            // Fotoğraf yükleme ve kayıt işlemleri
            if (isset($projectData['projectPhoto']) && $projectData['projectPhoto']->isValid()) {
                $newImage = $projectData['projectPhoto'];
                $extension = $newImage->getClientOriginalExtension();

                // Dosya ismini oluşturma
                $uniqueName = time() . '-' . uniqid('', true);
                $newFileName = $uniqueName . '.' . $extension;

                // Dosyayı public/storage/project/$userId klasörüne kaydetme
                $newImagePath = $newImage->storeAs('public/project/' . $user->id, $newFileName);

                // Proje kaydı oluşturma
                Project::create([
                    'user_id' => $user->id,
                    'title' => $projectData['projectTitle'],
                    'url' => $projectData['projectUrl'],
                    'category_id' => $projectData['projectCategory'],
                    'img' => $newFileName, // Dosya adını veritabanına kaydediyoruz
                    'description' => $projectData['projectDescription'],
                ]);
            } else {
                // Fotoğraf yüklenmediyse veya geçerli değilse işlem yapılabilir
                Project::create([
                    'user_id' => $user->id,
                    'title' => $projectData['projectTitle'],
                    'url' => $projectData['projectUrl'],
                    'category_id' => $projectData['projectCategory'],
                    'description' => $projectData['projectDescription'],
                ]);
            }
        }

        // Kursları güncelleme
        $user->courses()->delete();
        foreach ($formData['courses'] as $courseData) {
            // Fotoğraf yükleme ve kayıt işlemleri
            if (isset($courseData['courseImage']) && $courseData['courseImage']->isValid()) {
                $newImage = $courseData['courseImage'];
                $extension = $newImage->getClientOriginalExtension();

                // Dosya ismini oluşturma
                $uniqueName = time() . '-' . uniqid('', true);
                $newFileName = $uniqueName . '.' . $extension;

                // Dosyayı public/storage/course/$userId klasörüne kaydetme
                $newImagePath = $newImage->storeAs('public/course/' . $user->id, $newFileName);

                // Kurs kaydı oluşturma
                Course::create([
                    'user_id' => $user->id,
                    'name' => $courseData['courseName'],
                    'learn' => $courseData['learnCourse'],
                    'logo' => $newFileName, // Dosya adını veritabanına kaydediyoruz
                    'describe' => $courseData['courseDescription'],
                ]);
            } else {
                // Fotoğraf yüklenmediyse veya geçerli değilse işlem yapılabilir
                Course::create([
                    'user_id' => $user->id,
                    'name' => $courseData['courseName'],
                    'learn' => $courseData['learnCourse'],
                    'describe' => $courseData['courseDescription'],
                ]);
            }
        }

        // Sosyal medya hesaplarını güncelleme
        $user->social()->delete();
        foreach ($formData['socials'] ?? [] as $platform => $link) {
            if (empty($link)) {
                continue;
            }

            // Aynı URL'nin daha önce eklenip eklenmediğini kontrol et
            $existingSocial = Social::where('url', $link)->first();
            if ($existingSocial && $existingSocial->user_id !== $user->id) {
                return redirect()->back()->withErrors(['socials' => 'Bu URL ile daha önce bir sosyal medya hesabı eklenmiş.'])->withInput();
            }

            Social::create([
                'user_id' => $user->id,
                'platform' => $platform,
                'url' => $link,
            ]);
        }

        return redirect()->route('admin.user.index')->with('success', 'Kullanıcı başarıyla güncellendi.');
    }
}
