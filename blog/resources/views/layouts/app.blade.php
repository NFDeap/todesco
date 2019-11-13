<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('lib/materialize/dist/css/materialize.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/datatables.min.js"></script>

    
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    

    <!-- dataTable CSS -->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
      
    
    <!-- JS jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>        

    <!-- JS dataTable -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>	    
    
    <!-- JS -->
    <script src="{{ asset('js/init.js')}}"></script>

    <title>{{ config('seo.tituloAdmin') }}</title>
</head>
<body>
    <div id="app">
    
            @include('layouts._admin._nav')

        <main>
            @if(Session::has('mensagem'))
            <div class="container">
                <div class="row">
                    <div class="card {{ Session::get('mensagem')['class'] }}">
                        <div class="card-content center-align">
                            {{ Session::get('mensagem')['msg'] }}
                        </div>
                    </div>
                </div>
            </div>
            
            @endif

            @yield('content')
        </main>

        <br>
        <br>

        
        <footer class="page-footer">                
            <div class="container center-align">
                <div class="row">
                    <div class="col l4 s12">
                        <h5 class="white-text border-bottom-light">Sistema de Administração</h5>                               
                    </div>
                    <div class="col l6 offset-l2 s12">                        
                        <h5 class="white-text border-bottom-light">Links</h5>
                            <div class="col m4">
                            <ul class="footerLinks left">
                                <li><a class="" target="_blanck" href="{{ route('site.home') }}">Site</a></li>
                                <li><a class="" href="{{ route('admin.principal') }}">Inicio</a></li>
                                <li><a class="" href="{{ route('admin.usuarios') }}">Usuários</a></li>
                            </ul>
                            </div>
                            <div class="col m4">
                            <ul class="footerLinks">
                                <li><a class="" href="{{ route('admin.carros') }}">Carros</a></li>
                                <li><a class="" href="{{ route('admin.marcas') }}">Marcas</a></li>
                                <li><a class="" href="{{ route('admin.modelos') }}">Modelos</a></li>
                            </ul> 
                            </div>           
                            <div class="col m4">                       
                            <ul class="footerLinks right">                            
                                <li><a class="" href="{{ route('admin.slides') }}">Slides</a></li>
                                <li><a class="" href="{{ route('admin.paginas') }}">Páginas</a></li>
                                <li><a class="" href="{{ route('admin.contatos') }}">Contatos</a></li>
                            </ul> 
                            </div>                       
                    </div>                    
                </div>
            </div>
                <div class="footer-copyright">
                    <div class="container right-align">
                    <small class="muted">© 2019 Desenvolvido por Luís Felipe e Francisco de A.P</small>
                    </div>
                </div>                      
        </footer>
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('lib/jquery/dist/jquery.js')}}"></script>    
    <script src="{{ asset('lib/materialize/dist/js/materialize.js')}}"></script>
    

</body>
</html>
