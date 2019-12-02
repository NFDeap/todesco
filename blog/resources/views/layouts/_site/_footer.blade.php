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
                        <td><a target="_blanck" href="https://api.whatsapp.com/send?1=pt_BR&phone=5515974045144"><img class="imgWhatsapp2" src="http://localhost:8000/img/whatsapp.png"></a></td>
                        <td><a class="light-text2" target="_blanck" href="https://api.whatsapp.com/send?1=pt_BR&phone=5515974045144">WhatsApp: {{ $contatos->whatsapp }}</a></td>
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
                    <table class="tableFooter plusFooter">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a class="" target="_blanck" href="https://www.instagram.com/todescoveiculos/?hl=pt-br"><img class="imgInstagram" src="http://localhost:8000/img/instagram.png"></a></td>
                                <td><a class="light-text2" target="_blanck" href="https://www.instagram.com/todescoveiculos/?hl=pt-br"><b>Instagram</b></a></td>                                
                            </tr>
                            <tr>
                                <td><a class="" target="_blanck" href="https://www.facebook.com/todescoveiculos/"><img class="imgFacebook" src="http://localhost:8000/img/facebook.png"></a></td>
                                <td><a class="light-text2" target="_blanck" href="https://www.facebook.com/todescoveiculos/"><b>Facebook</b></a></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>            
                </ul>
                <ul class="footerLinks">
                    <div class="col m6">
                    <li><a class="" href="{{ route('site.home') }}"><b>Home</b></a></li>
                    <li><a class="" href="{{ route('site.sobre') }}"><b>Sobre</b></a></li>
                    <li><a class="" href="{{ route('site.contato') }}"><b>Contato</b></a></li>            
                    <li><a class="" href="{{ route('site.financiamento') }}"><b>Simulação</b></a></li>
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
