<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Carro;
use App\Slide;
use App\Marca;
use App\Modelo;
use App\Contato;
use App\Galeria;

class HomeController extends Controller
{
    
    public function index(){
        
        $carros = Carro::where('publicar','=','sim')->orderBy('id','desc')->paginate(32);
        $slides = Slide::where('publicado','=','sim')->orderBy('ordem')->get();        
        $galeria = Galeria::where('carro_id','<>',null)->get();
        /* dd($galeria); */

        $paginacao = true;
        
        $marcas = Marca::orderBy('titulo')->get();
        $modelos = Modelo::orderBy('titulo')->get();
        $contatos = Contato::find(1);
        
        $totalCarrosID = Carro::all();        

        foreach($totalCarrosID as $d){            
            $d = $d->id;            
           /*
            $carro = Carro::find($d);
            $galeria = $carro->galeria()->orderBy('ordem')->get();
            */
            /* $carro = Carro::where('id','=',$d)->get();*/
            $carro = Carro::find($d);            
            $galeria = $carro->galeria()->orderBy('ordem')->get();
        }


        return view('site.home',compact('carros','slides','paginacao','marcas','modelos','contatos'));
    }

    public function busca(Request $request){ //Request -> Recebe os dados através do method get

        $busca = $request->all();        

        $carros = Carro::where('publicar','=','sim')->orderBy('titulo')->get();

        $paginacao = false;

        $marcas = Marca::orderBy('titulo')->get();
        $modelos = Modelo::orderBy('titulo')->get();        
        $contatos = Contato::find(1);

        if($busca['marca_id'] == 'todas'){
            $testeMarca = [
                ['marca_id','<>',null]
            ];
        }
        else{
            $testeMarca = [
                ['marca_id','=',$busca['marca_id']]
            ];
        }
        

        if($busca['modelo_id'] == 'todos'){
            $testeModelo = [
                ['modelo_id','<>',null]
            ];
        }
        else{
            $testeModelo = [
                ['modelo_id','=',$busca['modelo_id']]
            ];
        }


        if($busca['anoMin'] == null && $busca['anoMax'] == null){
            $anoMin = 1;
            $anoMax = 9999;
        }
        elseif( $busca['anoMin'] == null && $busca['anoMax'] != null ) {
           $anoMin = 1;           
           $anoMax = $busca['anoMax'];
        }
        elseif($busca['anoMax'] == null && $busca['anoMin'] != null ){
            $anoMax = 9999;           
            $anoMin = $busca['anoMin'];
         }
        elseif($busca['anoMax'] != null || $busca['anoMin'] != null ){
            $anoMin = $busca['anoMin'];
            $anoMax = $busca['anoMax'];
        }    

        $testePreco = [
            [['preco','>=','0']],            
            [['preco','>=','5000'],['preco','<=','15000']],
            [['preco','>=','15000'],['preco','<=','25000']],
            [['preco','>=','25000'],['preco','<=','35000']],
            [['preco','>=','35000'],['preco','<=','45000']],
            [['preco','>=','45000'],['preco','<=','55000']],
            [['preco','>=','55000'],['preco','<=','65000']],            
            [['preco','>=','65000'],['preco','<=','75000']],
            [['preco','>=','75000'],['preco','<=','85000']],
            [['preco','>=','85000'],['preco','<=','95000']],
            [['preco','>=','95000'],['preco','<=','105000']],
            [['preco','>=','105000'],['preco','<=','115000']],
            [['preco','>=','115000'],['preco','<=','125000']],
            [['preco','>=','125000'],['preco','<=','135000']],        
            [['preco','>=','135000']]
        ];
        $numPreco = $busca['preco'];                             
        
        $carros = Carro::where('publicar','=','sim')
        ->where($testeMarca)
        ->where($testeModelo)
        ->whereBetween('ano', [$anoMin, $anoMax])
        ->where($testePreco[$numPreco])        
        ->orderBy('titulo','asc')->get();   
        
        /* $carros = Carro::where('publicar','=','sim')
        ->whereBetween('ano', [1, 32])->get(); */

        return view('site.busca',compact('busca','carros','paginacao','marcas','modelos','contatos'));

    }
}

