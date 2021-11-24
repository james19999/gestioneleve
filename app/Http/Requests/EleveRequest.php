<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EleveRequest extends FormRequest
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
        'nom'         =>'required'          ,
        'prenom'      =>'required'           ,
        'date_naiss'   => 'required|date'         ,
        'sexe'        =>'required'        ,
        'adresse'     =>'required'         ,
        'tel'          =>'required' ,
        'classe_id'   =>'required'          ,
        ];
    }

    public function messages()
    {
        return [
            'nom.required'         =>'Enter le nom de l\'élève'          ,
            'prenom.required'      =>'Entre le prénom de l\'élève'           ,
            'date_naiss.required'   => "la date de naissance de l'élève "         ,
            'sexe.required'        =>'le sexe '        ,
            'adresse.required'     =>'adresse'         ,
            'tel.required'          =>'le téléphone' ,
            'classe_id.required'   =>'la classe '          ,
        ];
    }
}