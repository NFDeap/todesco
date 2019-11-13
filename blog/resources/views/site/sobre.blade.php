@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row section">
        <div class="center-align">
            <h3>Sobre</h3>
        </div>
            <div class="divider"></div>
            
            <div class="row section">
                <div class="col s12 m6">
                @if(isset($pagina->mapa))
                    <div class="video-container">
                    {!! $pagina->mapa !!}
                    </div>

                @else
                <img class="responsive-img admPost" src="{{ asset($pagina->imagem) }}">
                @endif
                
                </div>
                <div class="col s12 m6">
                    <h4>{{ $pagina->titulo }}</h4>
                        <blockquote>
                        {{ $pagina->descricao }}
                        </blockquote>
                        <p>{{ $pagina->texto }}</p>
                </div>
            </div>
    </div>        
    <br>
    <br>
</div>
@endsection
