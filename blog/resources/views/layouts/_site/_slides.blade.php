<br>
<br>
<div class="container">
<div class="row section">
    <h4 class="center-align textNovEstoque">Novidades em Estoque</h4>
    <br>
    <div class="divider grey darken-4"></div>   
    <br>
</div>
<div class="slider p-2">
    <ul class="slides">
        @foreach($slides as $slide)
        <li onclick="window.location='{{ $slide->link }}'">
            <img class="slider-img" src="{{ asset($slide->imagem) }}" alt="{{ $slide->titulo }}">
            <div class="caption center-align">
                <h4>{{ $slide->titulo }}</h4>
                <h5>{{ $slide->descricao }}</h5>
                @if($slide->link != null)
                    <a href="{{ $slide->link }}" class="btn-small btn1">Mais...</a>
                @endif
            </div>            
        </li>
        @endforeach
    </ul>

</div>
    <div class="row center-align">
        <button onclick="sliderPrev()" class="btn-small btn1">
            <i class="material-icons center">keyboard_arrow_left</i>
        </button>
        <button onclick="sliderNext()" class="btn-small btn1">
            <i class="material-icons center">keyboard_arrow_right</i>
        </button>
    </div>   
</div>
