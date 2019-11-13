<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ isset($seo['titulo']) ? $seo['titulo'] :  config('seo.titulo') }}</title>
    <meta name="description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}">

    <meta name="twitter:card" value="summary">

    <meta property="og:title" content="{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ isset($seo['url']) ? $seo['url'] : config('app.url') }}" />
    <meta property="og:image" content="isset($seo['imagem']) ? $seo['imagem'] : config('seo.imagem')" />
    <meta property="og:description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('lib/materialize/dist/css/materialize.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
</head>
<body>
    <div id="app-layout">
        <!-- Navbar -->
        <header>
        @include('layouts._site._nav')
        </header>

        <!-- Conteudo -->
        <!-- <main> -->

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
        <!-- </main> -->
        
        <!-- Rodape -->
        <footer class="page-footer">                <!-- grey darken-4 -->
        @include('layouts._site._footer')                        
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('lib/jquery/dist/jquery.js')}}"></script>    
    <script src="{{ asset('lib/materialize/dist/js/materialize.js')}}"></script>
    <script src="{{ asset('js/init.js')}}"></script>
    
</body>
</html>
