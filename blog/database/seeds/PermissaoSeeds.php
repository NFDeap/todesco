<?php

use Illuminate\Database\Seeder;
use App\Permissao;


class PermissaoSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Permissao::where('nome','=','usuario_listar')->count()){
            Permissao::create([
                'nome'=>'usuario_listar','descricao'=>'Listar Usuários'
            ]);
        }
        else{
            $permissao = Permissao::where('nome','=','usuario_listar')->first();
            $permissao->update([
                'nome'=>'usuario_listar','descricao'=>'Listar Usuários'
            ]);
        }

        if(!Permissao::where('nome','=','usuario_adicionar')->count()){
            Permissao::create([
                'nome'=>'usuario_adicionar','descricao'=>'Adicionar Usuários'
            ]);
        }
        else{
            $permissao = Permissao::where('nome','=','usuario_adicionar')->first();
            $permissao->update([
                'nome'=>'usuario_adicionar','descricao'=>'Adicionar Usuários'
            ]);
        }

        if(!Permissao::where('nome','=','usuario_editar')->count()){
            Permissao::create([
                'nome'=>'usuario_editar','descricao'=>'Editar Usuários'
            ]);
        }
        else{
            $permissao = Permissao::where('nome','=','usuario_editar')->first();
            $permissao->update([
                'nome'=>'usuario_editar','descricao'=>'Editar Usuários'
            ]);
        }

        if(!Permissao::where('nome','=','usuario_deletar')->count()){
            Permissao::create([
                'nome'=>'usuario_deletar','descricao'=>'Deletar Usuários'
            ]);
        }
        else{
            $permissao = Permissao::where('nome','=','usuario_deletar')->first();
            $permissao->update([
                'nome'=>'usuario_deletar','descricao'=>'Deletar Usuários'
            ]);
        }       
    }
}
