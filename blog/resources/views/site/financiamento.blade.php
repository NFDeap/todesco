@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row section">
        <div class="center-align">
            <h3>Financiamento</h3>
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

                                 
            <form class="col s12 m12" action="{{ route('site.financiamento.enviar') }}" method="post">
            {{ csrf_field() }}
                <div class="container-fluid">                    
                        <div class="input-field">
                            <input type="text" name="nome" class="validate" maxlength="60">
                            <label>Nome Completo</label>
                        </div>
                        
                        <div class="row section">
                            <div class="col m6">
                                <div class="input-field">
                                    <input type="text" name="email" class="validate" maxlength="70">
                                    <label>E-mail</label>
                                    <span class="helper-text" data-error="wrong"  >Exemplo: teste@teste.com</span>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="CPFCNPJ" class="validate" maxlength="18">
                                    <label>CPF ou CNPJ</label>
                                    <span class="helper-text" data-error="wrong"  >Exemplo: 999.999.999/99 ou 99.999.999/0009-99</span>
                                </div>
                            </div>

                            <div class="col m6">
                                <div class="input-field">
                                    <input type="text" name="nascimento" class="validate" maxlength="10">
                                    <label>Nascimento</label>
                                    <span class="helper-text" data-error="wrong"  >Exemplo: 99/99/9999</span>
                                </div>                                                                                                               
                                <div class="input-field">
                                    <input type="text" name="celular" class="validate" maxlength="16">
                                    <label>Celular / WhatsApp</label>
                                    <span class="helper-text" data-error="wrong"  >Exemplo: (99) 9 9999-9999</span>
                                </div>       
                            </div>                           
                        </div>                           
                        <button class="btn btn1">Enviar <i class="material-icons right">send</i> </button>                    
                    </div>
                </div>
            </form>                                            
    </div>        
</div>
@endsection
