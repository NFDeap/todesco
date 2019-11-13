<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Carro;
use App\Marca;

class MarcaController extends Controller
{
    public function index(){             
        $registros = Marca::all();
        return view('admin.marcas.index',compact('registros'));        
    }


    public function adicionar(){
        return view('admin.marcas.adicionar');
    }


    public function salvar(Request $request){
        $dados = $request->all();

        $registro = new Marca();
        $registro->titulo = $dados['titulo'];
        $registro->save(); /* Metodo que salva no banco. */

        \Session::flash('mensagem',['msg'=>'Registro Criado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.marcas');
    }


    public function editar($id){
        $registro = Marca::find($id);
        return view('admin.marcas.editar', compact('registro'));
    }
    

    public function atualizar(Request $request, $id){
        $registro = Marca::find($id);
        $dados = $request->all(); /* Receber todos os dados */                
        $registro->titulo = $dados['titulo'];
        $registro->update();

        \Session::flash('mensagem',['msg'=>'Registro Atualizado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.marcas');
    }


    public function deletar($id){

        if(Carro::where('marca_id','=',$id)->count()){
            $msg = "Não é possível deletar esse registro! Esses carros (";
                $carros = Carro::where('marca_id','=',$id)->get();
                foreach($carros as $carro){
                    $msg .= "Id('s):" . $carro->id . " " . "/";
                }
                $msg .= ") Estão relacionados.";
            
            \Session::flash('mensagem',['msg'=>$msg,'class'=>'red white-text']);

            return redirect()->route('admin.marcas');    
        }

        Marca::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Registro Deletado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.marcas');
    }

}
