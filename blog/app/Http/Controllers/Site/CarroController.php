<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Carro;
use App\Contato;
use App\Galeria;

class CarroController extends Controller
{
    public function index($id){

        $carro = Carro::find($id);
        $galeria = $carro->galeria()->orderBy('ordem')->get();
        $contatos = Contato::find(1);

        $seo = [
            'titulo'=>$carro->titulo,
            'descricao'=>$carro->descricao,
            'imagem'=>asset($carro->imagem),            
            'url'=>route('site.carro',[$carro->id,str_slug($carro->titulo,'_')])
        ];

        return view('site.carro',compact('carro','galeria','contatos','seo'));
    }
}
