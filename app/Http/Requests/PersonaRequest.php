<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaRequest extends FormRequest
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
                "id"             =>"",
                "id_nacionalidad"=> "required|max:20",
                "documento"=> "required|max:11",
                "nombre"=> "required",
                "apellidos"=> "required",
                "fecha_nacimiento"=> "required",
                "lugar_nacimiento"=> "required",
                "sexo"=> "required",
                "calle"=> "required",
                "altura"=> "required",
                "piso"=> "required",
                "depto"=> "required",
                "barrio"=> "required",
                "id_localidad"=> "required",
                "telefono"=> "required",
                "correo" => "required"
        ];
    }
}
