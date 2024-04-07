<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class searchbienRequest extends FormRequest
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
            'price' => ['numeric','gte:0','nullable'],
            'surface' => ['numeric','gte:100','nullable'],
            'piece' => ['numeric','gte:1','nullable'],
            'titre' => ['string','nullable']
        ];
    }
}
