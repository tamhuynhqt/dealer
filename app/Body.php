<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    protected $guarded = [];

    public function Car()
    {
        return $this->hasMany('App\Car');
    }
}
