<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ajout_bien_request extends FormRequest
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
           
            'titre_b' => 'regex : /[a-z]+/',
            'desc'=> 'regex : /[a-z]+/',
            'nb_piece'=> 'regex : /[0-9]+/',
            'nb_chambre'=> 'regex : /[0-9]+/',
            'adresse'=> 'regex :/[a-z]+/',
            'ville'=> 'regex :/[a-z]+/',
            'nb_etage'=> 'regex : /[0-9]+/',
            'surface'=> 'regex : /[0-9]+/',
            'prix'=> 'regex : /[0-9]+/',
            'code_postal'=> 'regex : /[a-z0-9]+/',
            'options' => 'array|exists:options,id',
            'sold' =>'boolean'
    
           
        ];
    }
}
