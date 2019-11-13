
@if(isset($registro->imagem))


<div class="input-field">
    <input type="text" name="titulo" class="validade" value="{{ (isset($registro->titulo) ? $registro->titulo : '') }}">
    <label>Título: </label>
</div>


<div class="input-field">
    <input type="text" name="descricao" class="validade" value="{{ (isset($registro->descricao) ? $registro->descricao : '') }}">
    <label>Descrição: </label>
</div>


<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn btn1">
        <span>Imagem</span> <i class="material-icons right">image</i>
            <input type="file" name="imagem">            
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
            <span class="helper-text" data-error="wrong" data-success="right">Inserir apenas com o Formato Paisagem!</span>
        </div>
    </div>
    <div class="col m6 s12">        
        <img width="250" src="{{ asset($registro->imagem) }}">        
    </div>
</div>


<div class="input-field">
    <input type="text" name="link" class="validade" value="{{ (isset($registro->link) ? $registro->link : '') }}">
    <label>Link: </label>
</div>


<div class="input-field">
    <input type="text" name="ordem" class="validade" value="{{ (isset($registro->ordem) ? $registro->ordem : '') }}">
    <label>Ordem: </label>
</div>


<div class="input-field col s12">
    <select name="publicado">
        <option value="nao" {{(isset($registro->publicado) && $registro->publicado == 'nao' ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($registro->publicado) && $registro->publicado == 'sim' ? 'selected' :  '')}}>Sim</option>
    </select>    
    <label>Publicar?</label>
</div>


@else

<div class="row">
    <div class="file-field input-field col m12 s12">
        <div class="btn btn1">
        <span>Upload de Imagens</span> <i class="material-icons right">image</i>
            <input type="file" multiple name="imagens[]">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
            <span class="helper-text" data-error="wrong" data-success="right">Inserir apenas com o Formato Paisagem!</span>
        </div>
    </div>
</div>

@endif

