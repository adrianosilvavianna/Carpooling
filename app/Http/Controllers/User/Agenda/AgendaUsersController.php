<?php

namespace App\Http\Controllers\User\Agenda;

use App\Domains\Agenda;
use App\Domains\AgendaUser;
use App\Domains\User;
use App\Http\Controllers\Controller;
class AgendaUsersController extends Controller
{

    protected $agenda;

    public function __construct(Agenda $agenda)
    {
        $this->agenda = $agenda;
    }

    public function index()
    {
        return view('agendaUsers.index')->with('agendas', $this->agenda->orderBy('created_at', 'desc')->get());
    }

    public function store(Agenda $agenda, AgendaUser $agendaUser)
    {
        try{
            $agendaUser->isAuthUser($agenda);

            $agendaUser = $agendaUser->create(['agenda_id' => $agenda->id, 'user_id' => $this->getUser()->id]);
            return redirect()->route('user.agendaUsers.index')->with('success', 'Você esta participando da carona! '.$agendaUser->id);
        }catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show(Agenda $agenda)
    {
        try{
            return view('agendaUsers.show')->with('agenda', $agenda);
        }catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Agenda $agenda, AgendaUser $agendaUser)
    {
        try{
            $agendaUser->isAuthUser($agenda);
            $agendaUser->where('agenda_id', $agenda->id)->where('user_id', \Auth::User()->id)->delete();
            return redirect()->route('user.agendaUsers.index')->with('success', 'Você saiu da carona!');
        }catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}

