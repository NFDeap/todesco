<!-- link ( http://localhost:8000/carro_post/titulo_do_carro ) -->
@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row section">
        <div class="center-align">
            <h3 class="word-wrap">{{ $carro->titulo }}</h3>
        </div>
            <div class="divider"></div>
            
            <div class="row section">
                <div class="col s12 m8">
                    @if($carro->galeria()->count())
                    <div class="row">
                        <div class="slider">
                            <ul class="slides materialboxed">
                            @foreach($galeria as $imagem)
                                <li>                                
                                    <img class="responsive-img" src="{{ asset($imagem->imagem) }}" alt="{{ $imagem->titulo }}">  <!-- responsive-img -->
                                    <div class="caption right-align">
                                        <h5>{{ $imagem->titulo }}</h5>                                    
                                        <p>{{ $imagem->descricao }}</p>                                    
                                    </div>    
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                         
                    <div class="row center-align">
                        <button onclick="sliderPrev()" class="btn btn1">Anterior</button>
                        <button onclick="sliderNext()" class="btn btn1">Próxima</button>
                    </div>   
                    @else
                    <img class="responsive-img materialboxed" src="{{ asset($carro->imagem) }}">
                    @endif
                
                    <blockquote>
                        <h5>Descrição</h5>
                        <div class="divider"></div>
                        <p>{{ $carro->descricao }}</p>
                    </blockquote>
                                    
                    <br>

                    <div class="divider"></div>

                    <blockquote>       
                    <p>
                    <i class="material-icons left">call</i>Telefone: {{ $contatos->telefone }}
                    <br>
                    <br>
                    <i class="material-icons">phone_iphone</i> &nbsp WhatsApp: {{ $contatos->whatsapp }}
                    </p>                  
                    </blockquote>   
                    
                    <a href="{{ route('site.contato') }}">                                          
                    <button class="btn btn1" type="button">
                        Ir Para Pagina de contato
                        <i class="material-icons right">email</i>
                    </button>
                    </a>
                </div>
                <div class="col s12 m4">

                    <blockquote>
                        <h5>Detalhes do Carro</h5>
                    </blockquote>

                    <table class="detalhesCarro">
                        <thead>                        
                        </thead>
                        <tbody>                        
                        <tr>
                            <td><b><p class="light-text">ID: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->id }}</p></b></td>
                        </tr>
                        <tr>
                            <p class="dark-text"><b> </p>
                            <td><b><p class="light-text">Preço: </p></b></td>
                            <td><b><span class="green-text">R$ {{ number_format($carro->preco,2,",",".") }}</span></b></td>
                        </tr>
                        <tr>                            
                            <td><b><p class="light-text">Marca: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->marca->titulo }}</p></b></td>
                        </tr>
                        <tr>                            
                            <td><b><p class="light-text">Modelo: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->modelo->titulo }}</p></b></td>
                        </tr>
                        <tr>
                            <td><b><p class="light-text">Ano: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->ano }}</p></b></td>
                        </tr>
                        <tr>
                            <td><b><p class="light-text">Cor: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->cor }}</p></b></td>
                        </tr>
                        <tr>
                            <td><b><p class="light-text">Portas: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->portas }}</p></b></td>
                        </tr>
                        <tr>
                            <td><b><p class="light-text">Quilometragem: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->quilometragem }}</p></b></td>
                        </tr>
                        <tr>
                            <td><b><p class="light-text">Combústivel: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->combustivel }}</p></b></td>
                        </tr>
                        <tr>
                            <td><b><p class="light-text">Placa nº Final: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->placa }}</p></b></td>
                        </tr>
                        <tr>
                            <td><b><p class="light-text">Aceita Trocas: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->aceitaTroca }}</p></b></td>
                        </tr>
                        <tr>
                            <td><b><p class="light-text">Único Dono: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->unicoDono }}</p></b></td>
                        </tr>
                        <tr>
                            <td><b><p class="light-text">Câmbio: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->cambio }}</p></b></td>
                        </tr>
                        <tr>
                            <td><b><p class="light-text">Direção: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->direcao }}</p></b></td>
                        </tr>
                        <tr>
                            <td><b><p class="light-text">Potência do Motor: </p></b></td>
                            <td><b><p class="dark-text">{{ $carro->potenciaMotor }}</p></b></td>
                        </tr>
                        </tbody>
                    </table>                   
                </div>
            </div>
    </div>        
</div>
@endsection
