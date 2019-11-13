<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    public function carro(){
        return $this->belongsTo('App\Carro','carro_id');
    }
}
