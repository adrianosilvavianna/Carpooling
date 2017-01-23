<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

class Carpool extends Model
{
    protected $fillable = ['user_id'];

    public function Users()
    {
        return $this->hasMany(User::class);
    }

}
