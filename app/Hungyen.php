<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Hungyen extends Model
{
    public function hanoi(){
        return $this->belongsTo( 'App\Hanoi');
    }
}
