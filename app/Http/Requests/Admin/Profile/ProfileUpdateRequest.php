<?php

namespace App\Http\Requests\Admin\Profile;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Herkesin bu isteği yapmasına izin veriyoruz, gerektiği gibi değiştirilebilir.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'address' => 'required|string',
            'phone' => 'required|string',
            'birthday' => 'nullable|date',
            'about' => 'nullable|string',
            'freelance' => 'nullable|boolean',
            'degree' => 'required|string',
            'experience' => 'nullable|string',
            'expertise.*' => 'nullable|string',
            'skill.*' => 'nullable|string',
            'experiences.*.position' => 'required|string',
            'experiences.*.company' => 'required|string',
            'experiences.*.fromdate' => 'required|date',
            'experiences.*.enddate' => 'nullable|date',
            'experiences.*.experienceDescription' => 'nullable|string',
            'projects.*.projectTitle' => 'required|string',
            'projects.*.projectUrl' => 'required|string',
            'projects.*.projectCategory' => 'required|exists:project_categories,id',
            'projects.*.projectDescription' => 'nullable|string',
            'projects.*.projectPhoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'courses.*.courseName' => 'required|string',
            'courses.*.learnCourse' => 'required|string',
            'courses.*.courseDescription' => 'nullable|string',
            'courses.*.courseImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'socials.*' => 'nullable|string|url',
        ];
    }

    public function messages()
    {
        return [
            'address.required' => 'Adres alanı gereklidir.',
            'address.string' => 'Adres alanı metin formatında olmalıdır.',
            'phone.required' => 'Telefon alanı gereklidir.',
            'phone.string' => 'Telefon alanı metin formatında olmalıdır.',
            'birthday.date' => 'Doğum tarihi geçerli bir tarih formatında olmalıdır.',
            'about.string' => 'Hakkında alanı metin formatında olmalıdır.',
            'freelance.boolean' => 'Serbest çalışan alanı doğru/yanlış olarak işaretlenmelidir.',
            'degree.required' => 'Derece alanı gereklidir.',
            'degree.string' => 'Derece alanı metin formatında olmalıdır.',
            'experience.string' => 'Deneyim alanı metin formatında olmalıdır.',
            'expertise.*.string' => 'Uzmanlık alanları metin formatında olmalıdır.',
            'skill.*.string' => 'Beceriler alanları metin formatında olmalıdır.',
            'experiences.*.position.required' => 'Pozisyon alanı gereklidir.',
            'experiences.*.position.string' => 'Pozisyon alanı metin formatında olmalıdır.',
            'experiences.*.company.required' => 'Şirket alanı gereklidir.',
            'experiences.*.company.string' => 'Şirket alanı metin formatında olmalıdır.',
            'experiences.*.fromdate.required' => 'Başlangıç tarihi alanı gereklidir.',
            'experiences.*.fromdate.date' => 'Başlangıç tarihi geçerli bir tarih formatında olmalıdır.',
            'experiences.*.enddate.date' => 'Bitiş tarihi geçerli bir tarih formatında olmalıdır.',
            'experiences.*.experienceDescription.string' => 'Deneyim açıklaması metin formatında olmalıdır.',
            'projects.*.projectTitle.required' => 'Proje başlığı alanı gereklidir.',
            'projects.*.projectTitle.string' => 'Proje başlığı alanı metin formatında olmalıdır.',
            'projects.*.projectUrl.required' => 'Proje URL alanı gereklidir.',
            'projects.*.projectUrl.string' => 'Proje URL alanı metin formatında olmalıdır.',
            'projects.*.projectCategory.required' => 'Proje kategorisi alanı gereklidir.',
            'projects.*.projectCategory.exists' => 'Seçilen proje kategorisi geçersizdir.',
            'projects.*.projectDescription.string' => 'Proje açıklaması metin formatında olmalıdır.',
            'projects.*.projectPhoto.image' => 'Proje fotoğrafı geçerli bir resim dosyası olmalıdır.',
            'projects.*.projectPhoto.mimes' => 'Proje fotoğrafı sadece jpeg, png, jpg veya gif formatlarında olabilir.',
            'projects.*.projectPhoto.max' => 'Proje fotoğrafı maksimum :max KB boyutunda olmalıdır.',
            'courses.*.courseName.required' => 'Kurs adı alanı gereklidir.',
            'courses.*.courseName.string' => 'Kurs adı alanı metin formatında olmalıdır.',
            'courses.*.learnCourse.required' => 'Kurs öğrenme alanı gereklidir.',
            'courses.*.learnCourse.string' => 'Kurs öğrenme alanı metin formatında olmalıdır.',
            'courses.*.courseDescription.string' => 'Kurs açıklaması metin formatında olmalıdır.',
            'courses.*.courseImage.image' => 'Kurs fotoğrafı geçerli bir resim dosyası olmalıdır.',
            'courses.*.courseImage.mimes' => 'Kurs fotoğrafı sadece jpeg, png, jpg veya gif formatlarında olabilir.',
            'courses.*.courseImage.max' => 'Kurs fotoğrafı maksimum :max KB boyutunda olmalıdır.',
            'socials.*.url.string' => 'Sosyal medya URL\'leri metin formatında olmalıdır.',
            'socials.*.url.url' => 'Sosyal medya URL\'leri geçerli bir URL formatında olmalıdır.',
        ];
    }
}
