<?php

use Illuminate\Database\Seeder;
use App\Contato;

class ContatosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existe = Contato::where('telefone','=','(99) 9 9999-9999')->count();

        if($existe){
            $contato = Contato::where('telefone','=','(99) 9 9999-9999')->first();
        }
        else{
            $contato = new Contato();
        }

        $contato->telefone = "(99) 9 9999-9999";
        $contato->whatsapp = "(77) 7 7777-7777";
        $contato->save();
    }
}
