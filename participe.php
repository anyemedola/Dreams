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


            <div class="container participe" style="position: relative; margin-top:60px;" >
                <div class="row ">
                <div class='container-fluid espaco-entre-div' id="rolagem4" style="margin-top: 40px; margin-bottom: 40px;">
                <div class="container">
                        <div class="row mt-2">
                                <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                                    
                                <div class="text-center branca">
                                        <h3 style="color: #F2E5A2"><B>AINDA NÃO<br/> SOU CADASTRADO</B></h3>                                      
                                        <form id="register_form" action="controlers/valida_cadastro.php" method="POST" >
                                          <input  id="cpf" class="input form-control cpf"  name="cpf" type="text" placeholder="CPF*" required/><br/><br/>
                                          <button type="submit" class="submit wdtotal"><b>ENVIAR</b></button>
                                        </form>
                                        </div></div>

                                <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                                    <div class="text-center branca">
                                        <h3 style="color: #F2E5A2"><b>JÁ TENHO CADASTRO</b></h3>                                        
                                        <form id="login_form" action="controlers/login.php" method="POST" >
                                        <input  id="cpf" class="input form-control cpf"  name="cpf" type="text" placeholder="CPF*" required/>
                                    <input  id="senha" class="input form-control" name="senha" type="password" placeholder="SENHA" required/><br/><br/>
                                    <button type="submit" class="submit wdtotal"><b>ENVIAR</b></button>
                                    </form>
                                </div></div>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>
                       
        </div>

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