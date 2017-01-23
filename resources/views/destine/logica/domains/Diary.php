<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = ['destine_id', 'car_id', 'user_id', 'data_time'];
    protected $hidden   = ['destine_id', 'car_id', 'user_id'];
    protected $dates    = ['deleted_at', 'data_time'];

    public function User()
    {
        return $this->hasOne(User::class);
    }

    public function Destine()
    {
        return $this->hasOne(Destine::class);
    }

    public function Car()
    {
        return $this->hasOne(Car::class);
    }
}
