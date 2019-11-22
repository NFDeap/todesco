@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row section">
        <div class="center-align">
            <h3>Contato</h3>
        </div>
            <div class="divider"></div>
            
            <div class="row section">
                <div class="col s12 m6">
                    @if(isset($pagina->mapa))
                    <div class="video-container">
                    {!! $pagina->mapa !!}
                    </div>

                    @else
                    <img class="responsive-img" src="{{ asset($pagina->imagem) }}">
                    @endif
                </div>
                <div class="col s12 m5">
                    <h4>{{ $pagina->titulo }}</h4>
                    <blockquote>
                    <p>{{ $pagina->descricao }}<p>
                    </blockquote>
                    <p>{{ $pagina->texto }}</p>
       
                    <table class="tableContato">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="material-icons left">call</i></td>
                                <td><b>Telefone: {{ $contatos->telefone }}</b></td>
                            </tr>
                            <tr>
                                <td><img class="imgWhatsapp2" src="http://localhost:8000/img/whatsapp.png"></td>
                                <td><b>WhatsApp: {{ $contatos->whatsapp }}</b></td>
                            </tr>
                        </tbody>
                    </table>

                    
                    <form class="col s12" action="{{ route('site.contato.enviar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="input-field">
                            <input type="text" name="nome" class="validate" maxlength="60">
                            <label>Nome</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="email" class="validate">
                            <label>E-mail</label>
                        </div>
                        <div class="input-field">   
                            <textarea name="mensagem" class="materialize-textarea" maxlength="500"></textarea>
                            <!-- <input type="text" name="mensagem" class="validate"> -->
                            <label>Mensagem</label>
                        </div>
                        <button class="btn btn1">Enviar <i class="material-icons right">send</i> </button>
                    </form>
                </div>
            </div>
    </div>        
</div>
@endsection
