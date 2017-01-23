<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['destine_id', 'car_id', 'data_time', 'user_id'];
    protected $hidden   = ['destine_id', 'car_id', 'user_id'];
    protected $date = ['data_time'];
    protected $primaryKey = 'id';

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Destine()
    {
        return $this->belongsTo(Destine::class);
    }

    public function Car()
    {
        return $this->belongsTo(Car::class);
    }

    public function Users()
    {
        return $this->belongsToMany(User::class, 'agenda_users', 'agenda_id', 'user_id');
    }
}
