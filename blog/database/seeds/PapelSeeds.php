<?php

use Illuminate\Database\Seeder;

use App\Papel;

class PapelSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Papel::where('nome','=','admin')->count()){     //Se não existir, crie.
            $admin = Papel::create([
                'nome'=>'admin',
                'descricao'=>'Administrador do Sistema'
                
            ]);
        }

        if(!Papel::where('nome','=','gerente')->count()){     //Se não existir, crie.
            $admin = Papel::create([
                'nome'=>'gerente',
                'descricao'=>'Gerente do Sistema'
                
            ]);
        }

        
        if(!Papel::where('nome','=','vendedor')->count()){     //Se não existir, crie.
            $admin = Papel::create([
                'nome'=>'vendedor',
                'descricao'=>'Equipe de Vendas'
                
            ]);
        }
    }
}
