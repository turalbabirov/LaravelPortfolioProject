<?php

namespace App\Http\Requests\Admin\ProjectCategory;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Doğrulama yetkisi burada kontrol edilebilir, örneğin kullanıcı oturum açmış mı gibi
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:3|regex:/^[a-zA-Z\s]+$/',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Başlıq olaraq boş dəyər göndərilə bilməz.',
            'title.min' => 'Başlıq ən az 3 simvoldan ibarət olmalıdır.',
            'title.regex' => 'Başlıq sadəcə söz və ya söz birləşməsi ola bilər.',
        ];
    }
}
