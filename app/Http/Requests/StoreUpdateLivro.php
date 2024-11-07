<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateLivro extends FormRequest
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
            'nome' => 'required|min:3|max:255',
            'autor' => [
                'required',
                'min:3',
                'max:100000',
            ],
            'editora' => [
                'required',
                'min:3',
                'max:100',
            ],
            'data_publicacao' => [
                'required',
                'min:3',
                'max:100000',
            ],
            'preco' => [
                'required',
                'min:3',
                'max:100000',
            ],
        ];
    }
}
