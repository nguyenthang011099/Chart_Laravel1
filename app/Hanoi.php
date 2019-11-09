<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Hanoi extends Model
{
    public function hungyen(){
        return $this->hasOne('App\Hungyen');
    }
}

