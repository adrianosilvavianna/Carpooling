<?php

namespace App\Http\Controllers\User\Profile;

use App\Domains\Profile;
use App\Http\Controllers\Controller;
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
            'name'              =>  'required|string'           ,
            'email'              =>  'required|string'           ,
            'cpf'               =>  'required|'                 ,
            'phone'             =>  'required|string'           ,
            'neighborhood'      =>  'required|string'           ,
            'address'           =>  'required|string'           ,
            'number'            =>  'required|string'           ,
            'city'              =>  'required|string'
        ]);

        return $validator;
    }

    public function index()
    {
        try{
            $profile = \Auth::User()->Profile;
            if($profile){
                return view('profile.edit', compact('profile'));
            }else{
                $user = \Auth::User();
                return view('profile.create', compact('user'));
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

            $profile = $this->profile->create($request->input());
            return view('profile.edit', compact('profile'));
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit()
    {
        $profile = \Auth::User();
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
            return redirect()->back()->withInput()->with('success', 'ok');
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
