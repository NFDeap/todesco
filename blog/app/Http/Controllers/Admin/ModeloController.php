<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Carro;
use App\Modelo;

class ModeloController extends Controller
{
    public function index(){             
        $registros = Modelo::all();
        return view('admin.modelos.index',compact('registros'));        
    }


    public function adicionar(){
        return view('admin.modelos.adicionar');
    }


    public function salvar(Request $request){
        $dados = $request->all();

        $registro = new Modelo();
        $registro->titulo = $dados['titulo'];
        $registro->save(); /* Metodo que salva no banco. */

        \Session::flash('mensagem',['msg'=>'Registro Criado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.modelos');
    }


    public function editar($id){
        $registro = Modelo::find($id);
        return view('admin.modelos.editar', compact('registro'));
    }
    

    public function atualizar(Request $request, $id){
        $registro = Modelo::find($id);
        $dados = $request->all(); /* Receber todos os dados */                
        $registro->titulo = $dados['titulo'];
        $registro->update();

        \Session::flash('mensagem',['msg'=>'Registro Atualizado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.modelos');
    }


    public function deletar($id){
        
        if(Carro::where('modelo_id','=',$id)->count()){
            $msg = "Não é possível deletar esse registro! Esses carros (";
                $carros = Carro::where('modelo_id','=',$id)->get();
                foreach($carros as $carro){
                    $msg .= "Id('s):" . $carro->id . " " . "/";
                }
                $msg .= ") Estão relacionados.";
            
            \Session::flash('mensagem',['msg'=>$msg,'class'=>'red white-text']);

            return redirect()->route('admin.modelos');    
        }
        
        Modelo::find($id)->delete();

        \Session::flash('mensagem',['msg'=>'Registro Deletado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.modelos');
    }
}
