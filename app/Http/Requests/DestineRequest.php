<?php

namespace App\Http\Requests;

class DestineRequest extends Request
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
            'address'           =>  'required|string'    ,
            'neighborhood'      =>  'required|string'    ,
            'complement'        =>  'required|string'    ,
            'cep'               =>  'required|string'    ,
            'city'              =>  'required|string'    ,
            'uf'                =>  'required|string'    ,
            'country'           =>  'required|string'    ,
        ];
    }
}
