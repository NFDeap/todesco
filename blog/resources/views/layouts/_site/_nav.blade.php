<nav class="navSite">
    <div class="nav-wrapper"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col m2">
                    <p></p>
                </div>
                <div class="col m6">
                    <a href="{{ route('site.home') }}" class="brand-logo"> <img class="imgLogo" src="http://localhost:8000/img/logo.png"> </a>        
                </div>
                <br>       
                <div class="col m12 s12 menu">   
                    <div class="col m10">
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons mtidark">menu</i></a>
                    <ul class="right hide-on-med-and-down menu">
                        <li><a class="" href="{{ route('site.home') }}">Home</a></li>
                        <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
                        <li><a href="{{ route('site.contato') }}">Contato</a></li>                
                        <li><a href="{{ route('site.financiamento') }}">Simulação</a></li>   
                        <li><a target="_blanck" href="https://www.serasaconsumidor.com.br/score/">Consulta Score</a></li>    
                        <li><a href="{{ route('site.trabalheconosco') }}">Trabalhe Conosco</a></li>                            
                    </ul>            
                    </div>
                </div>
            </div>     
   
            <ul class="sidenav menu" id="mobile-demo">                
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
                <li><a href="{{ route('site.financiamento') }}">Simulação</a></li>
                <li><a href="{{ route('site.trabalheconosco') }}">Trabalhe Conosco</a></li>
            </ul>
        </div>        
    </div>
    
</nav>