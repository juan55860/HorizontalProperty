<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CobroParqueaderoRequest extends Request
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
            'valor'         => 'required|numeric',
            'descripcion'   => 'required',
            'fecha_inicial' => 'required|date',
            'fecha_final'   => 'required|date',
        ];
    }
}