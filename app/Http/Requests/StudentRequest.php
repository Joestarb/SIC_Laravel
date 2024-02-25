<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'student_name' => 'bail|required|alpha',
            'email_student' => 'bail|required|email',
            'matricula' => 'bail|required|string', // O alpha_num dependiendo de lo que represente la matrícula
            'password' => 'bail|required|max:20', // O entre dos valores si deseas especificar un mínimo y un máximo
        ];
    }
}
