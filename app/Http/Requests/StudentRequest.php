<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\AlphaSpaces;


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
            'name_student' => ['bail', 'required', new AlphaSpaces],
            'lastname_student' => ['bail', 'required', new AlphaSpaces],
            'id_student' => 'bail|required|string',
            'birthdate' => 'bail|required|date',
            'comments' => 'nullable|string',
        ];
    }
}

