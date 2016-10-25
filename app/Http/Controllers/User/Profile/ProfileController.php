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
            'name'              =>  'required|string'           ,
            'email'             =>  'required|string|email'     ,
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
            $profile = \Auth::User();
            if($profile){
                return view('profile.index', compact('profile'));
            }else{
                $user = \Auth::User();
                return view('profile.create', compact('user'));
            }

        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        return view('profile.edit')->with('profile', $this->profile->find($id));
    }

    public function store(Request $request)
    {
        try{
            if($this->validator($request)->fails()){
                return redirect()->back()->with('error', "Campos nao preenchidos");
            }
            $this->profile->create($request->input());
            return view('user::profile.index');
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }



    public function update(Request $request, $id)
    {
        try{
            if($this->validator($request)->fails()){
                return redirect()->back()->with('error', "Campos nao preenchidos");
            }
            $this->profile->find($id)->update($request->input());
            return redirect()->back()->withInput()->with('success', 'ok');
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
