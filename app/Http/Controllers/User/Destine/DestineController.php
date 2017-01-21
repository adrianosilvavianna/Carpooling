<?php

namespace App\Http\Controllers\User\Destine;

use App\Domains\Destine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LocationRequest;

class DestineController extends Controller
{
    protected $destine;

    public function __construct(Destine $destine)
    {
        $this->destine = $destine;
    }

    public function index()
    {
        $destines = $this->getUser()->Destine;
        return view('destine.index', compact('destines'));
    }

    public function create()
    {
        return view('destine.create');
    }

    public function store(LocationRequest $request, Destine $destine)
    {
        try{
            $destine = $destine->create(['user_id' => $this->getUser()->id]);
            $destine->Location()->create($request->input('location'));
            return redirect()->route('user.destine.index')->with('success', 'Cadastro Realizado!');
        }catch (\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit(Destine $destine)
    {
        return view('destine.edit',compact('destine'));
    }

    public function update(Destine $destine, LocationRequest $request)
    {
        try{
            $destine->Location()->update($request->input('location'));
            return redirect(route('user.destine.index'))->with('success', 'Cadastro Atualizado!');
        }catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Destine $destine)
    {
        try{
            $destine->ForceDelete();
            return redirect(route('user.destine.index'))->with('success', 'Excluido!');
        }catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
