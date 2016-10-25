<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profile;

    public function index()
    {
        try{
            $this->profile = \Auth::User()->Profile();
            if($this->profile->first()){ //first ta feio tem como melhorar esse cod
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

    public function store(ProfileRequest $request)
    {
        echo "opa";
        /*try{

            $profile = $this->profile->create($request->input());
            return view('profile.index', compact('profile'));
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }*/
    }



    public function update(Request $request, $id)
    {
        try{
            $this->profile->find($id)->update($request->input());
            return redirect()->back()->withInput()->with('success', 'ok');
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
