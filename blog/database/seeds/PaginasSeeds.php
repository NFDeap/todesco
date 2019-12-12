<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Pagina Sobre */
        $existe = Pagina::where('tipo','=','Sobre')->count();

        if($existe){
            $paginaSobre = Pagina::where('tipo','=','Sobre')->first();
        }else{
            $paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = "Título da Empresa.";
        $paginaSobre->descricao = "Descrição breve sobre a empresa.";
        $paginaSobre->texto = "Texto sobre a empresa.";
        $paginaSobre->imagem = "img/car1.jpeg";
        $paginaSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457.3405852782481!2d-47.48837396316808!3d-23.50642144832199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58b277c49b8df%3A0xfb2b2fbd5c9f5157!2sRiva+Car!5e0!3m2!1spt-BR!2sbr!4v1566497641447!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $paginaSobre->tipo = "Sobre";
        $paginaSobre->save();
        echo "Pagina Sobre Criada com Sucesso!";

        /* Pagina de Contato */
        $existe = Pagina::where('tipo','=','Contato')->count();

        if($existe){
            $paginaContato = Pagina::where('tipo','=','Contato')->first();
        }else{
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Entre em contato.";
        $paginaContato->descricao = "Preencha o Formulário.";
        $paginaContato->texto = "Texto Contato.";
        $paginaContato->email = "admin@admin.com";
        $paginaContato->imagem = "img/car1.jpeg";
        $paginaContato->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457.3405852782481!2d-47.48837396316808!3d-23.50642144832199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58b277c49b8df%3A0xfb2b2fbd5c9f5157!2sRiva+Car!5e0!3m2!1spt-BR!2sbr!4v1566497641447!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $paginaContato->tipo = "Contato";
        $paginaContato->save();
        echo "Pagina Contato Criada com Sucesso!";


       /* Pagina de Financiamento */
       $existe = Pagina::where('tipo','=','Simulacao')->count();

       if($existe){
           $paginaFinanciamento = Pagina::where('tipo','=','Simulacao')->first();
       }else{
           $paginaFinanciamento = new Pagina();
       }

       $paginaFinanciamento->titulo = "Financiamento.";
       $paginaFinanciamento->descricao = "Preencha o Formulário.";
       $paginaFinanciamento->texto = "Texto Financiamento.";
       $paginaFinanciamento->email = "admin@admin.com";
       $paginaFinanciamento->imagem = null;
       $paginaFinanciamento->mapa = null;
       $paginaFinanciamento->tipo = "Simulacao";
       $paginaFinanciamento->save();
       echo "Pagina Financiamento Criada com Sucesso!"; 


        /* Pagina de Trabalhe Conosco */
        $existe = Pagina::where('tipo','=','TrabalheConosco')->count();

        if($existe){
            $paginaTrabalheConosco = Pagina::where('tipo','=','TrabalheConosco')->first();
        }else{
            $paginaTrabalheConosco = new Pagina();
        }

        $paginaTrabalheConosco->titulo = "Trabalhe Conosco.";
        $paginaTrabalheConosco->descricao = "Preencha o Formulário.";
        $paginaTrabalheConosco->texto = "Texto Trabalhe Conosco.";
        $paginaTrabalheConosco->email = "admin@admin.com";
        $paginaTrabalheConosco->imagem = null;
        $paginaTrabalheConosco->mapa = null;
        $paginaTrabalheConosco->tipo = "TrabalheConosco";
        $paginaTrabalheConosco->save();
        echo "Pagina Trabalhe Conosco Criada com Sucesso!"; 

  }
}
