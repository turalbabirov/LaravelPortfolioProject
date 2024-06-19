<?php

namespace App\Http\Requests\Admin\User;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Ad tələb olunur.',
            'surname.required' => 'Soyad tələb olunur.',
            'email.required' => 'E-poçt ünvanı tələb olunur.',
            'email.email' => 'Zəhmət olmasa, düzgün bir e-poçt ünvanı daxil edin.',
            'email.unique' => 'Bu e-poçt ünvanı artıq istifadə edilməkdədir.',
            'password.required' => 'Şifrə tələb olunur.',
            'password.min' => 'Şifrə ən azı 6 simvoldan ibarət olmalıdır.',
            'picture.required' => 'Profil şəkli yükləmək məcburidir.',
            'picture.image' => 'Yüklənmiş fayl bir şəkil faylı olmalıdır.',
            'picture.mimes' => 'Yüklənmiş şəkil faylı .jpeg, .png, .jpg və ya .gif formatında olmalıdır.',
            'picture.max' => 'Yüklənmiş şəkil faylının həcmi ən çox 2MB ola bilər.',
        ];
    }
}
