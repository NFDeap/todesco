<br>
<br>
<div class="container">
<div class="slider p-2">
    <ul class="slides">
        @foreach($slides as $slide)
        <li onclick="window.location='{{ $slide->link }}'">
            <img class="slider-img" src="{{ asset($slide->imagem) }}" alt="{{ $slide->titulo }}">
            <div class="caption center-align">
                <h4>{{ $slide->titulo }}</h4>
                <h5>{{ $slide->descricao }}</h5>
                @if($slide->link != null)
                    <a href="{{ $slide->link }}" class="btn btn-small blue">Mais...</a>
                @endif
            </div>            
        </li>
        @endforeach
    </ul>
</div>
</div>
