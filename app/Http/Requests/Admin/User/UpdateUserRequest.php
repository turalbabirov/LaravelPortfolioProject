<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'nullable|string|min:6',
            'picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Ad tələb olunur.',
            'surname.required' => 'Soyad tələb olunur.',
            'email.required' => 'E-poçt ünvanı tələb olunur.',
            'email.email' => 'Zəhmət olmasa, düzgün bir e-poçt ünvanı daxil edin.',
            'email.unique' => 'Bu e-poçt ünvanı artıq istifadə edilməkdədir.',
            'password.required' => 'Şifrə tələb olunur.',
            'password.min' => 'Şifrə ən azı 6 simvoldan ibarət olmalıdır.',
            'picture.image' => 'Yüklənmiş fayl bir şəkil faylı olmalıdır.',
            'picture.mimes' => 'Yüklənmiş şəkil faylı .jpeg, .png, .jpg və ya .gif formatında olmalıdır.',
            'picture.max' => 'Yüklənmiş şəkil faylının həcmi ən çox 2MB ola bilər.',
        ];
    }
}
