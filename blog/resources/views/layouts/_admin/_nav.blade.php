<nav class="menuAdm">
    <div class="">  <!-- nav-wrapper -->
        <div class="container">
            <a href="{{ route('admin.principal') }}" class="brand-logo">Administração</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('admin.principal') }}">Início</a></li>
                <li><a target="_blanck" href="{{ route('site.home') }}">Site</a></li>
                @if(Auth::guest())
                <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                
                <li><a class="dropdown-trigger" href="#" data-target="dropdown1">Bem Vindo {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>

                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="#">{{ Auth::user()->name }}</a></li>
                        <li><a href="{{ route('admin.carros') }}">Carros</a></li>
                        <li><a href="{{ route('admin.marcas') }}">Marcas</a></li>
                        <li><a href="{{ route('admin.modelos') }}">Modelos</a></li>
                        <li><a href="{{ route('admin.slides') }}">Slides</a></li>                            
                        <li><a href="{{ route('admin.usuarios') }}">Usuários</a></li>                                                
                        <!-- <li><a href="{{ route('admin.papel') }}">Papel</a></li>    -->
                        <li><a href="{{ route('admin.paginas') }}">Páginas</a></li>
                        <li><a href="{{ route('admin.contatos') }}">Contatos</a></li>  
                    </ul>

                <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>   
                <li><p class="text-light"><span id="hora"></span></p></li>
                @endif
            </ul>            
            <ul class="sidenav" id="mobile-demo">                
                <li><a href="{{ route('admin.principal') }}">Início</a></li>
                <li><a target="_blanck" href="{{ route('site.home') }}">Site</a></li>
                @if(Auth::guest())
                <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                <li><a class="dropdown-trigger" href="#" data-target="dropdown2"> Bem Vindo ! {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id="dropdown2" class="dropdown-content darken-4">
                    <li><a href="#">{{ Auth::user()->name }}</a></li>
                    <li><a href="{{ route('admin.carros') }}">Carros</a></li>
                    <li><a href="{{ route('admin.marcas') }}">Marcas</a></li>
                    <li><a href="{{ route('admin.modelos') }}">Modelos</a></li>
                    <li><a href="{{ route('admin.slides') }}">Slides</a></li>                     
                    <li><a href="{{ route('admin.usuarios') }}">Usuários</a></li>                                                             
                    <!-- <li><a href="{{ route('admin.papel') }}">Papel</a></li>         -->             
                    <li><a href="{{ route('admin.paginas') }}">Páginas</a></li>
                    <li><a href="{{ route('admin.contatos') }}">Contatos</a></li> 
                </ul>
                <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                @endif
            </ul>            
        </div>        
    </div>
</nav>