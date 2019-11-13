

<div class="input-field">
    <input type="text" name="titulo" class="validade" maxlength="40" value="{{ isset($pagina->titulo) ? $pagina->titulo : '' }}">
    <label>Título: </label>
</div>

<div class="input-field">
    <input type="text" name="descricao" class="validade" maxlength="500" value="{{ isset($pagina->descricao) ? $pagina->descricao : '' }}">
    <label>Descrição: </label>
</div>

@if(isset($pagina->email))
<div class="input-field">
    <input type="text" name="email" class="validade" maxlength="50" value="{{ isset($pagina->email) ? $pagina->email : '' }}">
    <label>E-mail: </label>
</div>
@endif

<div class="input-field">
    <textarea name="texto" class="materialize-textarea" maxlength="700">
        {{ isset($pagina->texto) ? $pagina->texto : '' }}
    </textarea>
    <label>Texto: </label>
</div>

<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn btn1">
        <span>Imagem</span> <i class="material-icons right">image</i>
            <input type="file" name="imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>
    </div>
    <div class="col m6 s12">
        @if(isset($pagina->imagem))
            <img width="120" src="{{ asset($pagina->imagem) }}">
        @endif
    </div>
</div>


<div class="input-field">
<span class="helper-text" data-error="wrong" data-success="right">Iframe do Google Maps -> Local -> Compartilhar -> Incorporar um Mapa -> Copiar HTML</span>    
<textarea name="mapa" class="materialize-textarea">
        {{ isset($pagina->mapa) ? $pagina->mapa : '' }}
    </textarea>    
    <label>Mapa: </label>    
</div>