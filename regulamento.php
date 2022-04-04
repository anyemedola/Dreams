<?php 
    require "config.php";
    require "includes/header.php";
    $timerSorteio = timerSorteio();
?>

            <div class="container-fluid main-section" id="rolagem1">


            <nav class="navbar fixed-top navbar-expand-md custom-navbar navbar-dark text-center">
                         <img class="navbar-brand" src="img/Logo DreamStore copiar.png" id="logo_custom" width="5%"  alt="logo">
                            <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon "></span>
                            </button>
                              <div class="collapse navbar-collapse " id="collapsibleNavbar">
                                  <ul class="navbar-nav ml-auto ">
                                    <li class="nav-item">
                                      <a class="nav-link" href="home"><b>INICIO</b></a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="participe"><b>PARTICIPE</b></a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="home"><b>COMO PARTICIPAR</b></a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="home"><b>PRÊMIOS</b></a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="home"><b>DÚVIDAS</b></a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="regulamento"><b>REGULAMENTOS</b></a>
                                    </li>  
                                  </ul>
                              </div>  
            </nav>

            <div class="container-fluid regulamento espaco-entre-div" id="rolagem7">
            <div class="container text-center">
                            <h2 style="color: #772A8C; margin-bottom:8px !important">Regulamento</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 align-self-end" style="padding-top: 20px">
                            <iframe frameborder="0" id="iframepdf" src="Regulamento.pdf#toolbar=0&navpanes=0" style="width: 100%; height: 500px;"></iframe>
                        </div>
                        
                        
                    </div>
                </div></div></div>

            <div class="footer text-center">
                    <img src="img/Logo DreamStore copiar.png"  style="margin-top: 10px; width:5%;"/>
                <p style="margin-top: 10px; color:#FFF">
                © Copyright. Todos os direitos reservados à DreamStore. Desenvolvido por Agência Zum.
                </p>
                <p style="color: #FFF">Promoção valida para maiores de 18 anos, em todo território nacional. Modalidades sorteio autorizadas pela SECAP N° 04.017433/2021.
                                       <br> Período de compras válido a partir da 0h01min de 10/12/2021 até as 23h59min do dia 17/02/2022 (horário de Brasília).
                                       <br>Período de cadastro: da 0h01min de 10/12/2021 até as 23h00min de 17/02/2022 (horário de Brasília).
                                       <br> Consulte o regulamento completo em www.natalpremiadodreamstore.com.br.
                                       <br> Imagens meramente ilustrativas.      
                </p>
			</div>

            <!-- <div id="popup" class="popup">
            <img src="img/drogariasantamarta_resultado_sorteio_out_2021.png" style="width:100%" alt="popup">
            <div>
                <button id="close">Sair</button>
            </div>
            </div> -->

           
<?php 
    require "includes/footer.php";

?>