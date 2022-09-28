<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EspacioCurricularRequest extends FormRequest
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
            'id'                => '',
            'cod_espacio'       => 'required|min:1',
            'id_anio_escolar'   => 'required',
            'espacio_curricular'=> 'required|min:4|max:50',
            'nro_orden'         => 'required|min:1:max:2',
        ];
    }
}
