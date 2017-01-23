<?php
namespace App\Http\Controllers\User\Agenda;

use App\Domains\Agenda;
use App\Http\Controllers\Controller;
use App\Http\Requests\AgendaRequest;

class AgendaController extends Controller
{
	protected $agenda;

	public function index()
    {
    	return view('agenda.index')->with('agendas', $this->getUser()->Agenda()->orderBy('created_at', 'desc')->get());  //esta retornando a agenda criada pelo usuário autenticado
    }

    public function create()
    {    
        return view('agenda.create')->with(['cars' => $this->getCar(), 'destines' => $this->getDestine()]);
    }

    public function store(AgendaRequest $request)
    {
    	try{
            $this->getUser()->Agenda()->create($request->input());
         	return redirect(route('user.agenda.index'))->with('success', 'Cadastro Realizado');
        }catch(\Exeption $e){
        	return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit(Agenda $agenda)
    {
    	return view('agenda.edit')->with(['cars' => $this->getCar(), 'destines' => $this->getDestine(), 'agenda' => $agenda]);
    }

    public function update(Agenda $agenda, AgendaRequest $request)
    {
        $agenda->update($request->input());
        return redirect(route('user.agenda.index'))->with('success', 'Atualizado!');
    }

    public function destroy(Agenda $agenda)
    {
    	try{
            $agenda->forceDelete();
            return redirect(route('user.agenda.index'))->with('success', 'Excluido!');
        }catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function getCar()
    {
        return $this->getUser()->Cars()->get();

    }

    public function getDestine()
    {
        return $this->getUser()->Destines()->get();
    }
}