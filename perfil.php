<?php
require "config.php";
require "includes/session.php";
require "includes/header.php";

$id = $_SESSION['id_usuario_campanha'];
$mostra = $db->select("SELECT * FROM cadastro WHERE id = '$id' LIMIT 1");
$line = $db->expand($mostra);
?>



            <div class="container-fluid main-section repk" id="rolagem1">


            <nav class="navbar navbar-expand-lg somecelular" style="position: fixed; z-index:9999; width:100%; ">
                <div class="container navcontainer">
                    <div class="row" style="width: 100%">
                        <div class="collapse navbar-collapse" id="navbarsExample09">
                            
                            <div class="col-lg-12 col-md-12 text-center">
                                <ul class="list-inline mx-auto justify-content-center">
                                <ul class="list-inline mx-auto ">
                                    <li class="list-inline-item active float-left">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem1">Bem vindo, <b><?php echo $logado?></b> <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="list-inline-item ">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem7"><span style="color:transparent;">-</span></a>
                                    </li>
                                    <li class="list-inline-item float-right">
                                        <a class="nav-link link-scroll" href="logout" data-target="rolagem7">Sair</a>
                                    </li>
                                </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </nav>


            <nav class="navbar somepc" style="position: fixed; z-index:9999; width:100%;">

                <div class="container navcontainer">
                    <div class="row text-center" style="width: 100%; height: 60px !important; position: relative !important;">
                        <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation" style="width: 100%">
                            <span class="cormenu"><i class="fa fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="row" style="width: 100%">
                        <div class="collapse navbar-collapse" id="navbarsExample08">
                            
                            <div class="col-lg-12 col-md-12 text-center">
                                <ul class="list-inline mx-auto justify-content-center">
                                    <li class="list-inline-item active w-100">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem1">BEM VINDO, <b><?php echo $logado?></b> <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="list-inline-item w-100">
                                        <a class="nav-link link-scroll" href="logout" data-target="rolagem7">SAIR</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </nav>

            
            <div class="container-fluid espaco-entre-div" id="rolagem2">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12 col-md-12 col-xs-12 text-center banner">
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                    <div class=" col-sm-12 col-md-12 col-lg-12 text-center">
                                        <a href="perfil" class="submit large p-5 mrpc-5" style="color: #E00D13; font-weight: 800;">MEUS DADOS</a>
                                        <a href="cupom.php" class="submit large p-5 mlpc-5" style="color: #E00D13; font-weight: 800;">CADASTRAR CUPOM</a>
                                    </div>
                            </div>
                                 
                               
                        </div>                    
                    </div>
                </div>
              
            </div>
            
            <div class="container">
                <div class="container cupons" style="background-color:white;">
                    <h3 style="color: #E00D13;font-weight: 800;">DADOS CADASTRADOS</h3>
                    <hr>
                    <!-- <p>Seus <span style="color: #E00D13; font-weight: 800;">dados</span> cadastrados</p> -->
                    <div class="container lista">
                    
                            <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <p style="color: #E00D13;font-weight: 800;">NOME COMPLETO</p>
                                        <p><?php
                                            echo $logado;
                                        ?></p>
                                        <p style="color: #E00D13;font-weight: 800;">EMAIL</p>
                                        <p><?php
                                            echo $line['email'];
                                        ?></p>
                                        <p style="color: #E00D13;font-weight: 800;">DATA DE NASCIMENTO</p>
                                        <p><?php
                                            echo $line['datanascimento'];
                                        ?></p>
                                        <p style="color: #E00D13;font-weight: 800;">CPF</p>
                                        <p><?php
                                            echo $line['cpf'];
                                        ?></p>
                                        <p style="color: #E00D13;font-weight: 800;">CEP</p>
                                        <p><?php
                                            echo $line['cep'];
                                        ?></p>
                                    </div>
                                    <div class=" col-sm-6 col-md-6 col-lg-6">
                                    <p style="color: #E00D13;font-weight: 800;">ENDEREÇO</p>
                                        <p><?php
                                            echo $line['endereco'];
                                        ?></p>
                                        <p style="color: #E00D13;font-weight: 800;">BAIRRO</p>
                                        <p><?php
                                            echo $line['bairro'];
                                        ?></p>
                                        <p style="color: #E00D13;font-weight: 800;">CIDADE</p>
                                        <p><?php
                                            echo $line['cidade'];
                                        ?></p>
                                        <p style="color: #E00D13;font-weight: 800;">ESTADO</p>
                                        <p><?php
                                            echo $line['uf'];
                                        ?></p>
                                        <p style="color: #E00D13;font-weight: 800;">CELULAR</p>
                                        <p><?php
                                            echo $line['telefone'];
                                        ?></p>
                                    </div>
                            </div>                              
                                     
                    </div>                    
                </div>
                
            </div>
   

<?php require "includes/footer.php"; ?>