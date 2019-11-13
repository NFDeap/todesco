<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    public function carros(){
        return $this->hasMany('App\Carro','modelo_id');
    }
}
