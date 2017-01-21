<?php

namespace App\Http\Controllers\User\Profile;

use App\Domains\Profile;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profile;

    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function validator(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'profile.name'              =>  'required|string'           ,
            'profile.email'              =>  'required|string|email'           ,
            'profile.phone'             =>  'required|string'           ,
            'profile.cpf'               =>  'required|'                 ,
            'location.neighborhood'      =>  'required|string'           ,
            'location.address'           =>  'required|string'           ,
            'location.city'              =>  'required|string'           ,
        ]);

        return $validator;
    }

    public function index()
    {
        try{
            $profile = $this->getUser()->Profile;
            if($profile){
                return redirect()->route('user.profile.edit');
            }else{
                return redirect()->route('user.profile.create');
            }

        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        try{
            if($this->validator($request)->fails()){
                return redirect()->back()->with('error', "Campos nao preenchidos");
            }

            $profile = $this->getUser()->Profile()->create($request->input('profile'));
            $profile->Location()->create($request->input('location'));
            return redirect()->route('user.profile.edit')->with('success', 'Perfil Cadastrado!');
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit()
    {
        $profile = $this->getUser()->Profile;
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $this->profile = \Auth::User();
        try{
            if($this->validator($request)->fails()){
                return redirect()->back()->with('error', "Campos nao preenchidos");
            }
            $this->profile->update($request->input());
            return redirect()->back()->withInput()->with('success', 'Perfil Atualizado');
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
