

<div class="input-field">
    <input type="text" name="telefone" class="validade" maxlength="16" value="{{ isset($registro->telefone) ? $registro->telefone : '' }}">
    <label>Telefone: </label>
</div>

<div class="input-field">
    <input type="text" name="whatsapp" class="validade" maxlength="16" value="{{ isset($registro->whatsapp) ? $registro->whatsapp : '' }}">
    <label>WhatsApp: </label>
</div>

