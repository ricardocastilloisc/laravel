<?php

namespace DirectorioOnline\Http\Requests;

use DirectorioOnline\Http\Requests\Request;

class UserUpdateRequest extends Request
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
                'name' => 'required',
                'namep' => 'required',
                'namem' => 'required',
                'email'=> 'required|unique:users',
        ];
    }
}
