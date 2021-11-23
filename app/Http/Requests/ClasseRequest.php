<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClasseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'libelle'=>'required|unique:classes',
            'place'=>'required',
            'etage'=>'required',
        ];
    }

    public function messages()
    {
        return [
             'libelle.required'=>'le champs libelle est obligatoire',
             'place.required'=>'le champs place est obligatoire',
             'etage.required'=>'le champs etage est obligatoire',
        ];
    }
}