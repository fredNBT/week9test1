<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
   // protected $fillable = ['firstname', 'lastname'];

    public function Hero()
    {
        return $this->hasMany('App\Image');
    }
}
