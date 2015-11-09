<?php

namespace DirectorioOnline\Http\Requests;

use DirectorioOnline\Http\Requests\Request;

class EscuelaRequest extends Request
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
                'nombre_unidad_administrativa' => 'required',
                'email' => 'required',
                'cct'=> 'required|unique:directorio',
                'tipo_id'=> 'required',


                
            //
        ];
    }
}

