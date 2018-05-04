<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];

    public function body()
    {
        return $this->belongsTo('App\Body');
    }

    public function image()
    {
        return $this->belongsTo('App\Image');
    }
}
