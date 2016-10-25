<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
      protected $fillable = [
         'name', 'email', 'cpf', 'phone', 'complement', 'neighborhood', 'address', 'number', 'city', 'country' ,'user_id'
     ];

     public function User()
     {
         return $this->belongsTo(User::class);
     }


}
