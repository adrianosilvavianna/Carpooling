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

    public function store(ProfileRequest $request)
    {
        $profile = $this->getUser()->Profile()->create($request->input('profile'));
        $profile->Location()->create($request->input('location'));
        return redirect()->route('user.profile.edit')->with('success', 'Perfil Cadastrado!');
    }

    public function edit()
    {
        $profile = $this->getUser()->Profile;
        return view('profile.edit', compact('profile'));
    }

    
    public function update(ProfileRequest $request, Profile $profile)
    {
        dd($profile);
        $profile->update($request->input());
        return redirect()->back()->withInput()->with('success', 'Perfil Atualizado');
    }
}
