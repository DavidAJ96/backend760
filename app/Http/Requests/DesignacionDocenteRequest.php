<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesignacionDocenteRequest extends FormRequest
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
            'fecha_alta'           => 'required',
            'fecha_baja'           => '',
            'id_espacio_curricular'=> 'required',
            'id_curso'             => 'required',
            'id_agente'            => 'required',
            'id_situacion_revista' => 'required',
            'estado'               => 'required',
            'observaciones'        => '',
        ];
    }
}
