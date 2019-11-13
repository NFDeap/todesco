@include('layouts._site._filtros') 

<div class="row section">
    <h4 class="center-align textNovEstoque">Novidades em Estoque</h4>
    <br>
    <div class="divider grey darken-4"></div>   
    <br>
</div>
<div class="row section">
@foreach($carros as $carro)
    <div class="col s12 m3">
        <div class="card rounded">
            <div class="card-image">
                <a href="{{ route('site.carro',[$carro->id,str_slug($carro->titulo,'_')]) }}"><img class="ellipses" src="{{ asset($carro->imagem) }}" alt="{{ $carro->titulo }}"></a>
            </div>
            <div class="card-content">
            <!-- <br> -->
                <b><p class="dark-text border-bottom-dark center-align ellipses">{{ $carro->titulo }}</p></b>
                <br>
                <!-- <blockquote> -->
                <p class="dark-text center-align ellipses">{{ $carro->descricao }}</p>
                <!-- </blockquote> -->
                
                
            </div>
            <div class="card-footer center-align">
                <b><span class="green-text text-darken-2">R$: {{ number_format($carro->preco,2,",",".") }}</span></b>
                <!-- <br>  -->
                <!-- <br>  -->   
                <a class="dark-text" href="{{ route('site.carro',[$carro->id,str_slug($carro->titulo,'_')]) }}">           
                <div class="center-align card-action">
                Ver Mais...
                </div>
                </a>
                
            </div>
        </div>
 
    </div>
@endforeach    
</div>
@if($paginacao)
    <div class="row center-align pagination pager">    
        {{ $carros->links() }}
    </div>
@endif
