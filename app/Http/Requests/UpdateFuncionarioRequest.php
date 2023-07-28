<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFuncionarioRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            "cargo" => 'required|min:0|max:50',
            "salario"=> 'required|min:0|max:50',
            "contabancaria" => 'required|min:0|max:50', 
            "pessoa_id" => 'required|min:0|max:50'
            
        ];
    }
}
