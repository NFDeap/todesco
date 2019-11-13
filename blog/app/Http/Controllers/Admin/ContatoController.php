<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){        
        
        $registros = Contato::all();
        return view('admin.contatos.index',compact('registros'));
    }

    public function adicionar(){
        return view('admin.contatos.adicionar');
    }

    public function salvar(Request $request){
        $dados = $request->all();

        $registro = new Contato();
        $registro->telefone = $dados['telefone'];
        $registro->whatsapp = $dados['whatsapp'];        
        $registro->save(); /* Metodo que salva no banco. */

        \Session::flash('mensagem',['msg'=>'Registro Criado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.contatos');
    }

    public function editar($id){
        $registro = Contato::find($id);
        return view('admin.contatos.editar', compact('registro'));
    }
    
    public function atualizar(Request $request, $id){
        $registro = Contato::find($id);
        $dados = $request->all(); /* Receber todos os dados */
        
        $registro->telefone = $dados['telefone'];
        $registro->whatsapp = $dados['whatsapp'];

        $registro->update($dados);

        \Session::flash('mensagem',['msg'=>'Registro Atualizado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.contatos');

    }

/*     public function deletar($id){
        Contato::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Registro Deletado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.contatos');
    } */

}
