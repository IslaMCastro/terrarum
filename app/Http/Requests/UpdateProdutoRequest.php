<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProdutoRequest extends FormRequest
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
            "nome" => 'required|min:0|max:50',
            "tipo" => 'required|min:0|max:50|',
            "descricao" => 'required|min:0|max:50',
            "valor" => 'required|min:0|max:50|integer',
            "obs" => 'required|min:0|max:50',
            //
        ];
    }
}
