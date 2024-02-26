<?php

namespace App\Http\Requests\Auth;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username.required' => 'You cant leave username field empty',
            'username.min' => 'username must be 5 characters at least',
            'username.max' => 'username maximum characters are 20',
            'email.required' => 'you cant leave email filed empty',
            'password.required' => 'you cant leave password field empty',
            'password.min' => 'password must be at least 8 characters',
            'password.max' => 'Password maximum characters are 16',
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
            'username' => ['required', 'min:5', 'max:20', Rule::unique('users','username')],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => ['required', 'min:8', 'max:16', 'confirmed'],
        ];
    }
}
