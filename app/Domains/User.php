<?php

namespace App\Domains;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token',];

    protected $primaryKey = 'id';

    public function Profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function Cars()
    {
        return $this->hasMany(Car::class);
    }

    public function Destines()
    {
        return $this->hasMany(Destine::class);
    }

    public function Agenda()
    {
        return $this->hasMany(Agenda::class);
    }

    public function Agendas()
    {
        return $this->belongsToMany(Agenda::class, 'agenda_users', 'user_id', 'agenda_id');
    }
}
