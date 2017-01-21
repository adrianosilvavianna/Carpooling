<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class   Location extends Model
{
    use SoftDeletes;

    protected $fillable = ['complement', 'neighborhood', 'address', 'city', 'uf','country', 'cep'];
    protected $hidden   = ['locationable_type','locationable_id'];
    protected $dates    = ['deleted_at'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Destine()
    {
        return $this->belongsTo(Destine::class);
    }

    public function Profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function locationable()
    {
        return $this->morphTo();
    }
}
