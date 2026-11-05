<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class LoginRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6|max:60'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Campo email é obrigatório',
            'email.email' => 'O email Preenchido deve ser um endereço de email valido',
            'password.required' => 'Campo senha é obrigatório',
            'password.min' => 'O compa senha deve ter no minimo 6 caracteres',
            'password.max' => 'O campo senha deve ter no maximo 60 caracteres'
        ];
    }
}
