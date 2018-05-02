<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];

    public function Body()
    {
        return $this->belongsTo('App\Body');
    }

    public function Image()
    {
        return $this->hasOne('App\Image');
    }
}
