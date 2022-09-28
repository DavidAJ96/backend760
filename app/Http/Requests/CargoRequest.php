<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CargoRequest extends FormRequest
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
            'codigo'            => 'required|min:3|max:10',
            'fecha_alta'        => 'required',
            'nombre_cargo'      => 'required|min:3|max:50',
            'estado'            => 'required',
        ];
    }
}
