<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    public function car()
    {
        return $this->hasOne('App\Car');
    }
}
