<?php
namespace App\Http\Controllers\Api;

use App\Domains\Car;
use App\Domains\Profile;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;

class ApiCarController extends Controller
{
    protected $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function index()
    {
        return json_encode($this->car->all());

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