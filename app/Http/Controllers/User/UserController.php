<?php

namespace App\Http\Controllers\User;

use App\Domains\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    protected $user ;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function home()
    {
        return view('user.home');
    }

    public function index()
    {
        $user = \Auth::User();
        return view('user.index', compact('user'));
    }

    public function edit($id)
    {
        $user = $this->user->find($id);
        return view('user.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $this->user->find($id)->update($request->input());
        return redirect()->back()->withInput()->with('success', 'Usuáro Editado');
    }
}

