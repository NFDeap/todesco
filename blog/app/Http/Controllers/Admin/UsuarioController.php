<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Papel;

class UsuarioController extends Controller
{
    public function login(Request $request){
        $dados = $request->all();

        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['password']])){
            \Session::flash('mensagem',['msg'=>'Login realizado com sucesso!','class'=>'green white-text']);
            return redirect()->route('admin.principal');
            }
            \Session::flash('mensagem',['msg'=>'Erro! Confira os dados informados.','class'=>'red white-text']);
        
            return redirect()->route('admin.login');
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function index(){

      /*   if(auth()->user()->can('usuario_listar')){
            $usuarios = User::all();
            return view('admin.usuarios.index',compact('usuarios'));            
        }
        else{
            return redirect()->route('admin.principal');            
        }    */
        
        $usuarios = User::all();
        return view('admin.usuarios.index',compact('usuarios'));
    }

    public function adicionar(){
        return view('admin.usuarios.adicionar');
    }

    public function salvar(Request $request){
        $dados = $request->all();
        $usuario = new User();
        $usuario->name = $dados['name'];
        $usuario->email = $dados['email'];
        $usuario->password = bcrypt($dados['password']);
        $usuario->save(); /* Metodo que salva no banco. */

        \Session::flash('mensagem',['msg'=>'Registro Criado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.usuarios');
    }

    public function editar($id){
        $usuario = User::find($id);
        return view('admin.usuarios.editar', compact('usuario'));
    }
    
    public function atualizar(Request $request, $id){
        $usuario = User::find($id);
        $dados = $request->all(); /* Receber todos os dados */
        
        if(isset($dados['password']) && strlen($dados['password']) > 5){
            $dados['password'] = bcrypt($dados['password']);
        }else{
            unset($dados['password']);
        }
        $usuario->update($dados);

        \Session::flash('mensagem',['msg'=>'Registro Atualizado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.usuarios');

    }

    public function deletar($id){
        User::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Registro Deletado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.usuarios');
    }



    public function papel($id){
        $usuario = User::find($id);
        $papel = Papel::all();
        return view('admin.usuarios.papel', compact('usuario','papel'));
    }

    public function salvarPapel(Request $request,$id){        
        $usuario = User::find($id);
        $dados = $request->all();
        $papel = Papel::find($dados['papel_id']);
        $usuario->adicionaPapel($papel);

        return redirect()->back();
    }
    
    public function removerPapel($id,$papel_id){
        
        $usuario = User::find($id);        
        $papel = Papel::find($papel_id);
        $usuario->removePapel($papel);

        return redirect()->back();
    }

}
