@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row section">
        <div class="center-align">
            <h3>Trabalhe Conosco</h3>
        </div>

            <div class="divider"></div>
            
            <div class="row section">                
                <div class="col s12 m12">
                    <h4>{{ $pagina->titulo }}</h4>
                    <blockquote>
                    <p>{{ $pagina->descricao }}<p>
                    </blockquote>
                    <p>{{ $pagina->texto }}</p>
                </div>
            </div>       

                                 
            <form class="col s12 m12" action="{{ route('site.trabalheconosco.enviar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="container-fluid">                    
                        <div class="input-field">
                            <input type="text" name="nome" class="validate" maxlength="60" required>
                            <label>Nome Completo</label>
                        </div>
                            
                        <div class="row section">
                            <div class="col m6">
                                <div class="input-field">
                                    <input type="text" name="email" class="validate" maxlength="70" required>
                                    <label>E-mail</label>
                                    <span class="helper-text" data-error="wrong">Exemplo: teste@teste.com</span>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="CPF" class="validate" maxlength="18">
                                    <label>CPF</label>
                                    <span class="helper-text" data-error="wrong">Exemplo: 999.999.999/99</span>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="nascimento" class="validate" maxlength="10" required>
                                    <label>Nascimento</label>
                                    <span class="helper-text" data-error="wrong">Exemplo: 99/99/9999</span>
                                </div>  
                            </div>

                            <div class="col m6">                                                                                                          
                                <div class="input-field">
                                    <input type="text" name="telefone" class="validate" maxlength="16">
                                    <label>Telefone</label>
                                    <span class="helper-text" data-error="wrong">Exemplo: (99) 9999-9999</span>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="celular" class="validate" maxlength="16" required>
                                    <label>Celular / WhatsApp</label>
                                    <span class="helper-text" data-error="wrong">Exemplo: (99) 9 9999-9999</span>
                                </div>       
                                <div class="input-field">
                                    <input type="text" name="cnh" class="validate" maxlength="11">
                                    <label>CNH</label>
                                    <span class="helper-text" data-error="wrong">Exemplo: 12345678901</span>
                                </div>                                                                 
                            </div>                 
                        </div>                 

                        <div class="divider"></div>

                        <div class="row section">
                            <div class="col m6">
                                <div class="input-field">
                                    <input type="text" name="cep" class="validate" maxlength="9" required>
                                    <label>CEP</label>
                                    <span class="helper-text" data-error="wrong">Exemplo: 99999-999</span>
                                </div> 
                                <div class="input-field">
                                    <input type="text" name="cnh" class="validate" maxlength="35" required>
                                    <label>Cidade</label>
                                    <span class="helper-text" data-error="wrong">Exemplo: Sorocaba</span>
                                </div> 
                                <div class="input-field">
                                    <input type="text" name="cnh" class="validate" maxlength="25" required>
                                    <label>Estado</label>
                                    <span class="helper-text" data-error="wrong">Exemplo: São Paulo</span>
                                </div> 
                            </div>

                            <div class="col m6">
                                <div class="input-field">
                                    <input type="text" name="endereco" class="validate" maxlength="60">
                                    <label>Endereço</label>
                                    <span class="helper-text" data-error="wrong">Exemplo: Rua Maria Helena</span>
                                </div> 
                                <div class="input-field">
                                    <input type="text" name="numero" class="validate" maxlength="8">
                                    <label>Número</label>
                                    <span class="helper-text" data-error="wrong">Exemplo: 99</span>
                                </div> 
                                <div class="input-field">
                                    <input type="text" name="bairro" class="validate" maxlength="30">
                                    <label>Bairro</label>
                                    <span class="helper-text" data-error="wrong">Exemplo: JD. Maria Antonia</span>
                                </div> 
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="input-field">
                            <input type="text" name="cargodesejado" class="validate" maxlength="30">
                            <label>Cargo Desejado</label>
                            <span class="helper-text" data-error="wrong">Exemplo: Vendedor</span>
                        </div> 
                        <div class="input-field">
                            <input type="text" name="ultimosalario" class="validate" maxlength="30">
                            <label>Último Salário</label>
                            <span class="helper-text" data-error="wrong">Exemplo: R$ 1.999,99</span>
                        </div> 
                        <br>
                        <div class="divider"></div>

                        <div class="row">
                            <div class="file-field input-field col m6 s12 right">
                                <div class="btn btn1">
                                <span>Arquivo em Anexo</span> <i class="material-icons right">attach_file</i>
                                    <input type="file" name="arquivoemanexo" required>
                                </div>        
                                <div class="file-path-wrapper">
                                    <input type="text" class="file-path validade">
                                    <span class="helper-text" data-error="wrong">Apenas com o Formato <b>.docx</b> !</span>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn1">Enviar <i class="material-icons right">send</i> </button>                                            
                    <!-- </div> -->
                </div>                
            </form>                                            
    </div>        
</div>
@endsection
