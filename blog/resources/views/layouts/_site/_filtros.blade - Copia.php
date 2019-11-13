
<div class="container">
    <div class="row"></div>
</div>

<div class="container-fluid">  
    <form action="{{ route('site.busca') }}">          
        <div class="center-align">
            <h3>Pesquisa</h3>
        </div>

        <div class="divider"></div> 
        
        <div class="row section">    
            <div class="input-field col s6 m2">
                <select name="marca_id" class="selectedTest">
                    <option {{ isset($busca['marca_id']) && $busca['marca_id'] == 'todas' ? 'selected' : '' }} value="todas">Todas as Marcas</option>
                    @foreach($marcas as $marca)
                    <option {{ isset($busca['marca_id']) && $busca['marca_id'] == $marca->id ? 'selected' : '' }} value="{{ $marca->id }}"> {{ $marca->titulo }}</option>
                    @endforeach
                </select>
                <label for="marca">Marca: </label>
            </div>	

            <div class="input-field col s6 m2">
                <select name="modelo_id" class="selectedTest">
                    <option {{ isset($busca['modelo_id']) && $busca['modelo_id'] == 'todos' ? 'selected' : '' }} value="todos">Todos os Modelos</option>
                    @foreach($modelos as $modelo)
                    <option {{ isset($busca['modelo_id']) && $busca['modelo_id'] == $modelo->id ? 'selected' : '' }} value="{{ $modelo->id }}">{{ $modelo->titulo }}</option>
                    @endforeach
                </select>
                <label for="modelo">Modelo: </label>
            </div>	

            <div class="input-field col s6 m4">
                <select name="ano" class="selectedTest">
                    <option {{ isset($busca['ano']) && $busca['ano'] == 'todos' ? 'selected' : '' }} value="todos">Todos os Anos</option>
                    @foreach($carros as $carro)
                    <option {{ isset($busca['ano']) && $busca['ano'] == $carro->ano ? 'selected' : '' }} value="{{ $carro->ano }}">{{ $carro->ano }}</option>
                    @endforeach
                </select>                
                <label for="ano">Ano: </label>
            </div>	
<!-- 
            <div class="input-field col s6 m4">
                <select name="preco" class="selectedTest">                                    
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 0 ? 'selected' : '' ) }} value="0">Todos os Valores</option>                    
                    
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 1 ? 'selected' : '' ) }} value="1">R$ 5.000,00 a 15.000,00</option>
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 2 ? 'selected' : '' ) }} value="2">R$ 15.000,00 a 25.000,00</option>
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 3 ? 'selected' : '' ) }} value="3">R$ 25.000,00 a 35.000,00</option>
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 4 ? 'selected' : '' ) }} value="4">R$ 35.000,00 a 45.000,00</option>
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 5 ? 'selected' : '' ) }} value="5">R$ 45.000,00 a 55.000,00</option>
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 6 ? 'selected' : '' ) }} value="6">R$ 55.000,00 a 65.000,00</option>
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 7 ? 'selected' : '' ) }} value="7">R$ 65.000,00 a 75.000,00</option>
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 8 ? 'selected' : '' ) }} value="8">R$ 75.000,00 a 85.000,00</option>
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 9 ? 'selected' : '' ) }} value="9">R$ 85.000,00 a 95.000,00</option>
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 10 ? 'selected' : '' ) }} value="10">R$ 95.000,00 a 105.000,00</option>
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 11 ? 'selected' : '' ) }} value="11">R$ 105.000,00 a 115.000,00</option>
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 12 ? 'selected' : '' ) }} value="12">R$ 115.000,00 a 125.000,00</option>
                    <option {{ (isset($busca['preco']) && $busca['preco'] == 13 ? 'selected' : '' ) }} value="13">R$ 125.000,00 a 135.000,00</option>                    
                                                            
                </select>
                <label for="preco">Valor: </label>
            </div>	
 -->
            <div class="input-field col m3 s6">
                <input name="precoMin" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="precoMin" type="text" class="validate">
                <label for="last_name">Preço Mínimo:</label>
            </div>

            
            <div class="input-field col m3 s6">
                <input name="precoMax" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="precoMax" type="text" class="validate">
                <label for="last_name">Preço Máximo:</label>
            </div>

        </div>

        <div class="center-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">Pesquisar
                <i class="material-icons right">send</i>
            </button>
        </div>
        <br>
        <div class="divider"></div> 
        <br>
    </form>  
</div>