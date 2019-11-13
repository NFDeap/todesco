<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = "carros";

    public function marca(){
        return $this->belongsTo('App\Marca','marca_id');
    }
    
    public function modelo(){
        return $this->belongsTo('App\Modelo','modelo_id');
    }

    public function galeria(){
        return $this->hasMany('App\Galeria','carro_id');
    }
}
