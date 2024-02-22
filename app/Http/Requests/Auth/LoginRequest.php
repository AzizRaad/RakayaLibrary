<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages()
    {
        return [
            'username.required' => 'تعبئة خانة اسم المستخدم الزامية',
            'username.min' => 'يجب ان يكون اسم المستخدم 5 حروف على الاقل',
            'username.max' => 'يجب ان لا يتخطى اسم المستخدم 20 حرف',
            'password.required' => 'تعبئة خانة كلمة السر الزامية',
            'password.min' => 'يجب ان تكون خانة كلمة السر 8 حروف على الاقل',
            'password.max' => 'يجب ان لا تتخطى كلمة السر 16 حرف',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'min:5', 'max:20'],
            'password' => ['required', 'min:8', 'max:16'],
        ];
    }
}
