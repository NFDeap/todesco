@extends('layouts.app')

@section('content')

<div class="container principal">
<h5>Principal</h5>    
<div class="divider"></div>
    <div class="row">    
        <div class="col m4 s12">                        
            <div class="card rounded center-align">    
            <div class="card-title">  
            <br>                                                                                     
                <p class="title-card"><b> <span>Carros</span> </b></p>
            </div>
                <div class="card-content">                                                        
                    <a class="dark-text" href="{{ route('admin.carros') }}">           
                    <div class="card-panel card lighten-2 card-action"><B>Lista de Carros</B> </div>                                                                  
                    </a>                    
                </div>
            </div>
        </div>

        <div class="col m4 s12">                        
            <div class="card rounded center-align">    
            <div class="card-title">    
            <br>                                                                            
                <b> <span>Marcas</span> </b>
            </div>
                <div class="card-content">                                                        
                    <a class="dark-text" href="{{ route('admin.marcas') }}">           
                    <div class="card-panel card lighten-2 card-action"><B>Lista de Marcas</B> </div>                                                                  
                    </a>                    
                </div>
            </div>
        </div>

        <div class="col m4 s12">                        
            <div class="card rounded center-align">    
            <div class="card-title">    
            <br>                                                                            
                <b> <span>Modelos</span> </b>
            </div>
                <div class="card-content">                                                        
                    <a class="dark-text" href="{{ route('admin.modelos') }}">           
                    <div class="card-panel card lighten-2 card-action"><B>Lista de Modelos</B> </div>                                                                  
                    </a>                    
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col m12 s12">            
            <div class="divider"></div>
            <div class="card rounded center-align">    
            <div class="card-title">  
            <br>                                                                              
                <b> <span>Slides</span> </b>
            </div>
                <div class="card-content">                                                        
                    <a class="dark-text" href="{{ route('admin.slides') }}">           
                    <div class="card-panel card lighten-2 card-action"><B>Lista de Slides</B> </div>                                                                  
                    </a>                    
                </div>                                               
            </div>
        </div>
    </div>


    <div class="divider"></div>
    <div class="row">
        <div class="col m6 s12">                        
            <div class="card rounded center-align">    
            <div class="card-title">      
            <br>                                                                          
                <b> <span>Páginas</span> </b>
            </div>
                <div class="card-content">                                                        
                    <a class="dark-text" href="{{ route('admin.paginas') }}">           
                    <div class="card-panel card lighten-2 card-action"><B>Lista de Páginas</B> </div>                                                                  
                    </a>                    
                </div>
            </div>
        </div>

        <div class="col m6 s12">                        
            <div class="card rounded center-align">    
            <div class="card-title">         
            <br>                                                                       
                <b> <span>Contatos</span> </b>
            </div>
                <div class="card-content">                                                        
                    <a class="dark-text" href="{{ route('admin.contatos') }}">           
                    <div class="card-panel card lighten-2 card-action"><B>Lista de Contatos</B> </div>                                                                  
                    </a>                    
                </div>
            </div>
        </div>                                            
    </div>

</div>

@endsection