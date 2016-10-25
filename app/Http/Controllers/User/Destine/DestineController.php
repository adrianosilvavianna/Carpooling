<?php

namespace App\Http\Controllers\User\Destine;

use App\Domains\Destine;
use App\Http\Controllers\Controller;
use App\Http\Requests\DestineRequest;

class DestineController extends Controller
{
    protected $destine;

    public function __construct(Destine $destine)
    {
        $this->destine = $destine;
    }

    public function index()
    {
        try{
            $destines = $this->getUser()->Destines->all();
            return view('destine.index')->with('destines', $destines);
        }catch (\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        return view('destine.create');
    }

    public function store(DestineRequest $request)
    {
        try{
            $this->getUser()->Destines()->create($request->input());
            return redirect(route('destine.index'));
        }catch (\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $destine = $this->destine->find($id);
        return view('destine.edit',compact('destine'));
    }

    public function update(DestineRequest $request, $id)
    {
        try{
            $this->destine->find($id)->update($request->input());
            return redirect(route('destine.index'));
        }catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try{
            $this->destine->find($id)->ForceDelete();
            return redirect()->back()->with('success', 'Excluido');
        }catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
