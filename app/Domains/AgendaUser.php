<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

class AgendaUser extends Model
{
    protected $fillable = ['user_id','agenda_id'];

    public function Users()
    {
        return $this->hasMany(User::class);
    }

    public function Agendas()
    {
    	return $this->hasMany(Agenda::class);
    }

    public function isAuthUser(Agenda $agenda)
    {
        if(\Auth::User()->id === $agenda->user_id)
        {
            throw new \Exception('Esta é sua agenda!');
        }
        $this->alreadyStore($agenda);
    }

    public function alreadyStore($agenda)
    {
        if(AgendaUser::where('agenda_id', $agenda->id)->where('user_id', \Auth::User()->id)->first())
        {
            throw new \Exception('Você já pegou essa carona');
        }
    }

}
