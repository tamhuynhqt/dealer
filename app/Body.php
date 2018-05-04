<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    protected $guarded = [];

    public function car()
    {
        return $this->hasMany('App\Car');
    }
    public static function getNames()
    {
       $array = Body::select('name','id')->get()->toArray();
       $array1 = array();
       foreach($array as $record)
       {
           $array1 += array($record['id']=>$record['name']);
       }
        return $array1;
    }
/**
 * Undocumented function
 *
 * @param string $name
 * @return void
 */
    public static function getIdByName(string $name)
    {
        return Body::select('id')->where('name',$name)->get();
    }
}
