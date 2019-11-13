

<div class="input-field">
    <input type="text" name="nome" class="validade" maxlength="30" value="{{ (isset($registro->nome) ? $registro->nome : '') }}">
    <label>Nome do Papel: </label>
</div>


<div class="input-field">
    <input type="text" name="descricao" class="validade" maxlength="30" value="{{ (isset($registro->descricao) ? $registro->descricao : '') }}">
    <label>Descrição: </label>
</div>
