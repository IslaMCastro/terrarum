<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLocalRequest extends FormRequest
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
            "coordenadas" => 'required|min:0|max:50',
            "valorcontrato" => 'required|min:0|max:50',
            "setor" => 'required|min:0|max:50', 
            "cadastro_id" => 'required|min:0|max:50'
            //
        ];
    }
}
