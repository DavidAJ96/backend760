<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CicloLectivoRequest extends FormRequest
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
             'nombre_ciclo'             => 'required',
            'nota_min'                  => 'required',
            'nota_max'                  => 'required',
            'nota_aprueba'              => 'required',
            'cant_espacios_pendientes'  => 'required',
            'fecha_inicio'              => 'required',
            'fecha_fin'                 => 'required',
            'dias_clase'                => 'required',
            'cue_escuela'               => 'required',
            'estado'                    => 'required',
        ];
    }
}
