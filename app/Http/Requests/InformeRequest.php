<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformeRequest extends FormRequest
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
            'id'                     => '',
            'nro_orden'              => 'required',
            'leyenda'                => 'required',
            'nombre'                 => 'required',
            'definitivo'             => 'required',
            'cue_escuela'            => 'required'
        ];
    }
}
