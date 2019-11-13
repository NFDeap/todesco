<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Galeria;
use App\Carro;

class GaleriaController extends Controller
{
    public function index($id){
        $carro = Carro::find($id);

        $registros = $carro->galeria()->orderBy('ordem')->get();
        return view('admin.galerias.index',compact('registros','carro'));
    }

    public function adicionar($id){
        $carro = Carro::find($id);

        return view('admin.galerias.adicionar',compact('carro'));        
    }

    public function editar($id){
        
        $registro = Galeria::find($id);
        $carro = $registro->carro;

        return view('admin.galerias.editar', compact('registro','carro'));
    }

    public function salvar(Request $request,$id){
        
        $carro = Carro::find($id);

        $registros = $request->all();       

        if($carro->galeria()->count()){ //se carro possuir + que 1 galeria.
            $galeria = $carro->galeria()->orderBy('ordem','desc')->first();
            $ordemAtual = $galeria->ordem;            
        }else{
            $ordemAtual = 0;
        }

        if($request->hasFile('imagens')){
            $arquivos = $request->file('imagens');
            foreach($arquivos as $imagem){

                $registro = new Galeria();

                $rand = rand(11111,99999);
                $diretorio = "img/carros/".str_slug($carro->titulo,'_')."/";
                $ext = $imagem->guessClientExtension();
                $nomeArquivo = "_img_".$rand.".".$ext;
                $imagem->move($diretorio, $nomeArquivo);
                $registro->carro_id = $carro->id;
                $registro->ordem = $ordemAtual + 1;
                $ordemAtual++;
                $registro->imagem = $diretorio.'/'.$nomeArquivo;
                $registro->save();
            }
        }       

        \Session::flash('mensagem',['msg'=>'Registro Criado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.galerias',$carro->id);
        
    }


    public function atualizar(Request $request, $id){
        
        $registro = Galeria::find($id);
        
        $registros = $request->all();

        $registro->titulo = $registros['titulo'];
        $registro->descricao = $registros['descricao'];    
        $registro->ordem = $registros['ordem'];    
        
        $carro = $registro->carro;

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/carros/".str_slug($carro->titulo,'_')."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $registro->imagem = $diretorio.'/'.$nomeArquivo;
        }

        $registro->update();

        \Session::flash('mensagem',['msg'=>'Registro Atualizado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.galerias',$carro->id);

    }
    
    public function deletar($id){
        
        $galeria = Galeria::find($id);
        $carro = $galeria->carro;

        $galeria->delete();
        
        \Session::flash('mensagem',['msg'=>'Registro Deletado com Sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.galerias',$carro->id);
    }
}
