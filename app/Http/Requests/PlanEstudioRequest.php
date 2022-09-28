<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanEstudioRequest extends FormRequest
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
            'id'               => '',
            'nombre_plan'      => 'required|min:3|max:70',
            'ley_equivalencia' => 'required|min:3|max:70',
            'norma_dictamen'   => 'required|min:3|max:70',
            'ley_aprobacion'   => 'required|min:3|max:70',

        ];
    }
}
