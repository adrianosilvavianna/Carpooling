<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

class Destine extends Model
{
    protected $fillable = ['user_id'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Location()
    {
        return $this->morphOne(Location::class, 'locationable');
    }
    //delete Location and Representative Cascade
    function delete()
    {
        $this->Location()->forceDelete();
        parent::delete();
    }
}
