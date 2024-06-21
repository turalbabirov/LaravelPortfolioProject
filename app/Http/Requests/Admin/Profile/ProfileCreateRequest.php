<?php

namespace App\Http\Requests\Admin\Profile;

use Illuminate\Foundation\Http\FormRequest;

class ProfileCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'address' => 'required|string',
            'phone' => 'required|string',
            'birthday' => 'required|date',
            'about' => 'required|string',
            'freelance' => 'boolean',
            'degree' => 'required|string',
            'experience' => 'required|string',
            'expertise' => 'required|array',
            'expertise.*' => 'required|string',
            'skill' => 'required|array',
            'skill.*' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'User ID mütləq qeyd olunmalıdır.',
            'user_id.exists' => 'Göstərilən User mövcud deyil.',
            'address.required' => 'Address boş buraxıla bilməz.',
            'address.string' => 'Address yalnız string olmalıdır.',
            'phone.required' => 'Telefon nömrəsi mütləq qeyd olunmalıdır.',
            'phone.string' => 'Telefon nömrəsi sahəsi yalnız mətn olmalıdır.',
            'birthday.required' => 'Birthday mütləq qeyd olunmalıdır.',
            'birthday.date' => 'Birthday düzgün formatda olmalıdır.',
            'about.required' => 'About mütləq qeyd olunmalıdır.',
            'about.string' => 'About yalnız mətn olmalıdır.',
            'freelance.required' => 'Freelance mütləq qeyd olunmalıdır.',
            'freelance.boolean' => 'Freelance yalnız bəli və ya xeyr olmalıdır.',
            'degree.required' => 'Degree mütləq qeyd olunmalıdır.',
            'degree.string' => 'Degree yalnız mətn olmalıdır.',
            'experience.required' => 'Experience mütləq qeyd olunmalıdır.',
            'experience.string' => 'Experience yalnız mətn olmalıdır.',
            'expertise.required' => 'Expertise mütləq qeyd olunmalıdır.',
            'expertise.array' => 'Expertise bir dizi olmalıdır.',
            'expertise.*.string' => 'Expertise daxilindəki hər bir element yalnız mətn olmalıdır.',
            'skill.required' => 'Skill mütləq qeyd olunmalıdır.',
            'skill.array' => 'Skill bir dizi olmalıdır.',
            'skill.*.string' => 'Skill daxilindəki hər bir element yalnız mətn olmalıdır.',
        ];
    }
}
