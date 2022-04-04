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


            <form id="contact_form" action="controlers/salva_cadastro.php" method="POST" >
            <div class="espaco-entre-div cadastro" id="rolagem2" style="margin-top: 60px; margin-left: 60px;">
                        <div class="col-lg-12 col-md-12 col-xs-12 text-center">
                            
                                <h1 style="color: #F2E5A2; "><b>PREENCHA OS CAMPOS ABAIXO PARA PARTICIPAR</b></h1>
                                
                        </div>
                        <div style="display: inline;">                        
                                            <input  id="name" class="input form-control" name="name" type="text" placeholder="NOME COMPLETO*" required/>
                                            <input  id="cpf" class="input form-control cpf"  name="cpf" type="text" placeholder="CPF*" required/>
                                            <input  id="tel" class="input form-control whats" name="tel" type="text" placeholder="CELULAR*" size="30" maxlength="15" required/>
                                            <input  id="nasc" class="input form-control" name="nasc" type="text" placeholder="DATA DE NASCIMENTO*" size="30" maxlength="15" required/>
                                            <input  id="email" class="input form-control" name="email" type="email" placeholder="EMAIL VÁLIDO*" size="30" required/>
                                            <input  id="confirm_email" class="input form-control" name="confirm_email" type="email" placeholder="CONFIRMAÇÃO DO EMAIL*" size="30" required/>
                                            <input  name="cep" class="input form-control cep" type="text" id="cep" value="" placeholder="CEP*" size="10" maxlength="9" onblur="pesquisacep(this.value);" required/>
                                            <input  id="bairro" class="input form-control" name="bairro" type="text" placeholder="BAIRRO*" size="30" required/>
                                            <input  id="uf" class="input form-control" name="uf" type="text" placeholder="ESTADO*" size="30" required/>
                                            <input  id="end" class="input form-control" name="end" type="text" placeholder="ENDEREÇO*" size="30" required/>
                                            <input  id="cid" class="input form-control" name="cid" type="text" placeholder="CIDADE*" size="30" required/>
                                            <input  id="password" class="input form-control" name="password" type="password" placeholder="SENHA*" size="30" maxlength="20" minlength="6" required/>
                                            <input  id="confirm_password" class="input form-control" name="confirm_password" type="password" placeholder="CONFIRMAÇÃO DE SENHA*" size="30" maxlength="20" minlength="6"  required/><br><br>

                                            <input type="checkbox" id="whatsapp" name="whatsapp" value="sim">
                                            <label for="sim"><b>ACEITO RECEBER MENSAGENS PELO WHATSAPP DA DREAMSTORE</b></label><br>
                                            <input type="checkbox" id="novidade" name="novidade" value="sim">
                                            <label for="sim"><b>QUERO RECEBER NOVIDADES SOBRE A DREAM STORM E SUAS PROMOÇÕES</b></label><br>
                                            <input type="checkbox" id="regulamento" name="regulamento" value="sim" required>
                                            <label for="sim"><b>*LI E ACEITO O REGULAMENTO DA PROMOÇÃO</b></label><br><br>

                                            <p style="color:#ffffff;"><b>*CAMPOS DE PREENCHIMENTO OBRIGATÓRIO</b></p>

                        </div>
                        
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="submit wdtotal"><b>ENVIAR</b></button>
                        </div>
              
            </div>
            </form></div>

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