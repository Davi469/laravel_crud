<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEditora extends FormRequest
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
        'nome' => 'required|string|min:3|max:100',
        'telefone' => 'required|regex:/^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/',
        'email' => 'required|email|max:100',
        'site' => 'required|url|max:100',
    ];
}

}
