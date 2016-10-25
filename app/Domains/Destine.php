<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

class Destine extends Model
{
    protected $fillable = ['address', 'complement', 'cep', 'neighborhood', 'city', 'uf', 'phone', 'user_id'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
