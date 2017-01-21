<?php

namespace App\Http\Requests;

class ProfileRequest extends Request
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
            'profile.name'              =>  'required|string'           ,
            'profile.email'             =>  'required|string|email'     ,
            'profile.cpf'               =>  'required|'                 ,
            'profile.phone'             =>  'required|string'           ,
            'neighborhood'      =>  'required|string'           ,
            'address'           =>  'required|string'           ,
            'city'              =>  'required|string'
        ];
    }
}
