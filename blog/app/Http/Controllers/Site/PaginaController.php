<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pagina;
use App\Contato;

class PaginaController extends Controller
{
    public function sobre(){
        $pagina = Pagina::where('tipo','=','Sobre')->first();        
        $contatos = Contato::find(1);
        return view('site.sobre',compact('pagina','contatos'));
        
    }

    public function contato(){
        $pagina = Pagina::where('tipo','=','Contato')->first();        
        $contatos = Contato::find(1);
        return view('site.contato',compact('pagina','contatos'));
        
    }

    public function enviarContato(Request $request){        
        $pagina = Pagina::where('tipo','=','Contato')->first();
        $email = $pagina->email;

        \Mail::send('emails.contato',['request'=>$request], 
            function($m) use($request,$email){
                $m->from($request['email'], $request['nome']);
                $m->replyTo($request['email'], $request['nome']);
                $m->subject("Contato pelo Site - Contato");
                $m->to($email, 'Contato do Site');
            });

            \Session::flash('mensagem',['msg'=>'Contato enviado com Sucesso!','class'=>'green white-text']);

            return redirect()->route('site.contato');
    }

    public function trabalheConosco(){
        $pagina = Pagina::where('tipo','=','TrabalheConosco')->first();
        $contatos = Contato::find(1);
        return view('site.trabalheconosco',compact('pagina','contatos'));
    }
    
    public function enviarTrabalheConosco(Request $request){                
        $pagina = Pagina::where('tipo','=','TrablheConosco')->first();
        $email = $pagina->email;
        
        \Mail::send('emails.trabalheconosco',['request'=>$request], 
            function($m) use($request,$email){
                $m->subject("Contato pelo Site - Trabalhe Conosco");
                $m->from($request['email'], $request['nome']);
                $m->replyTo($request['email'], $request['nome']);                
                $m->to($email, 'Contato do Site');        
                $m->attach($request['arquivoemanexo'],[
                    'as'=>'Curriculo.docx',
                    'mime'=>'emails/curriculos',
                ]);         
            });
        
            \Session::flash('mensagem',['msg'=>'Contato enviado com Sucesso!','class'=>'green white-text']);

            return redirect()->route('site.trabalheconosco');             
    }



    public function financiamento(){
        $pagina = Pagina::where('tipo','=','Simulacao')->first();
        $contatos = Contato::find(1);
        return view('site.financiamento',compact('pagina','contatos'));
    }

    public function enviarFinanciamento(Request $request){        
        $pagina = Pagina::where('tipo','=','Simulacao')->first();
        $email = $pagina->email;

        \Mail::send('emails.financiamento',['request'=>$request], 
            function($m) use($request,$email){
                $m->subject("Contato pelo Site - Financiamento");
                $m->from($request['email'], $request['nome']);
                $m->replyTo($request['email'], $request['nome']);                
                $m->to($email, 'Contato do Site');                 
            });

            \Session::flash('mensagem',['msg'=>'Contato enviado com Sucesso!','class'=>'green white-text']);

            return redirect()->route('site.financiamento');
    }


}

