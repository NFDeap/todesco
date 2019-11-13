<div class="container center-align">
    <div class="row">
        <div class="col m2">
            <p></p>
        </div>
        <div class="col m4 s12">
            <h5 class="white-text">Mais Informações</h5>    <!-- border-bottom-dark my-2 -->
            <div class="container center-align">
            <table class="tableFooter">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="material-icons left">call</i></td>
                        <td>Telefone: {{ $contatos->telefone }}</td>
                    </tr>
                    <tr>
                        <td><img class="imgWhatsapp2" src="http://localhost:8000/img/whatsapp.png"></td>
                        <td>WhatsApp: {{ $contatos->whatsapp }}</td>
                    </tr>
                </tbody>
            </table>
            </div>
<!-- 
            <p class="footerLinks">
            <i class="material-icons">call</i> Telefone: {{ $contatos->telefone }}
            <br>
            <br>
            <img class="imgWhatsapp" src="http://localhost:8000/img/whatsapp.png">
            WhatsApp:  {{ $contatos->whatsapp }}
            </p> -->
        </div>
        <div class="col m4 s12">
          <h5 class="white-text">Links</h5>
                <ul class="footerLinks">
                    <div class="col m6">
                    <li><a class="" href="{{ route('site.home') }}"><b>Home</b></a></li>
                    <li><a class="" href="{{ route('site.sobre') }}"><b>Sobre</b></a></li>
                    <li><a class="" href="{{ route('site.contato') }}"><b>Contato</b></a></li>            
                    </div>            
                </ul>
                <ul class="footerLinks">
                    <div class="col m6">
                    <li><a class="" href="{{ route('site.financiamento') }}"><b>Financiamento</b></a></li>
                    <li><a class="" href="{{ route('site.trabalheconosco') }}"><b>Trabalhe Conosco</b></a></li>                    
                    </div>            
                </ul>
        </div>
        <div class="col m2">
            <p></p>
        </div>
    </div>
</div>

<div class="footer-copyright">                    
    <div class="container right-align">
    <small class="muted">© 2019 Desenvolvido por Luís Felipe e Francisco de A.P</small>                    
    </div>
</div>  
