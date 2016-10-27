<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['board', 'capacity', 'model', 'color','user_id'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
