<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateLivrosCreate extends FormRequest
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
            'nome' => 'required|min:2|max:70',
            'autor' => [
                'required',
                'min:2',
                'max:30',
            ],
            'data_publicacao' => ['required', 'date_format:Y-m-d'],
            'preco' => 'required',
            'editora_id' => 'required',
            'categoria_id' => 'required',
            'image' => 'required',
        ];
    }
}
