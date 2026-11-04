<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class RegisterRequest extends FormRequest
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
            'nome_completo' => 'required|max:120',
            'email' => 'required|email',
            'password' => 'required|min:6|max:60',
            'password_confirmation' => 'required|min:6|max:60',
            'data_nascimento' => 'required|date|before_or_equal:'.now()->subYears(13)->format('y-m-d'),
        ];
    }


    public function messages()
    {
        return  [
            'nome_completo.required' => 'Campo nome completo é obrigatório',
            'email.required' => 'Campo email é obrigatório',
            'email.email' => 'O Campo email deve receber um Email valido',
            'password.required' => 'Campo Senha é obrigatório',
            'password.min' => 'A senha deve ter no minimo 6 caracteres',
            'password.max' => 'O campo senha deve ter no maximo 60 caracteres',
            'password_confirmation' => 'Confirme sua senha',
            'data_nascimento.required' => 'Campo data de nascimento é obrigatório',
            'data_nascimento.date' => 'Informe uma data válida',
        ];
    }
}
