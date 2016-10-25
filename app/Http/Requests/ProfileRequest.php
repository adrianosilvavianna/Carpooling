<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProfileRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              =>  'required|string'    ,
            'email'             =>  'required|string|email'    ,
            'cpf'               =>  'required|'    ,
            'phone'             =>  'required|string'    ,
            'complement'        =>  'string'    ,
            'neighborhood'      =>  'required|string'    ,
            'address'           =>  'required|string'    ,
            'number'            =>  'required|string'    ,
            'city'              =>  'required|string'    ,
            'country'           =>  'string'    ,
        ];
    }
}
