<?php
require "config.php";
require "includes/session.php";
require "includes/header.php";

$total = 0;
$select = $db->select("SELECT COUNT(*) AS total FROM cupom WHERE cadastro_id='$id_logado'");
$line = $db->expand($select);
$total = $line['total'];

?>




            <div class="container-fluid main-section" id="rolagem1">


            <nav class="navbar navbar-expand-lg somecelular" style="position: fixed;z-index: 100;width:100%;">
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
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem1">Bem vindo, <b><?php echo $logado?></b> <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="list-inline-item w-100">
                                        <a class="nav-link link-scroll" href="logout" data-target="rolagem7">Sair</a>
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
            
            <div class="container-fluid">
                <div class="container cupons" style="background-color:white;">
                    <h3 style="color: #E00D13;font-weight: 800;">Cupons Cadastrados</h3>
                    <p>Você possui <span style="color: #E00D13; font-weight: 800;"><?php echo $total; ?></span> cupons cadastrados</p>
                    <hr>
                    <div class="row">
                    <div class="col-sm-5 col-md-5 col-lg-6 text-center">
                    <button type="button" data-toggle="modal" data-target="#modalExemplo" class="submit wdtotal"><b>LIMOUSINE</b></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                    <button type="button" data-toggle="modal" data-target="#modalExemplo" class="submit" style="margin-top: 30px; border-radius: 40px;"><b>VALE COMPRAS</b></button>
                    </div>
                    </div>
                    <?php 
                        $sel = $db->select("SELECT * FROM cupom WHERE cadastro_id='$id_logado' ORDER BY datacadastro DESC");
                        if($db->rows($sel)){
                            while($line = $db->expand($sel)){
                    ?>
                 
                        <div class="container lista">
                            <div class="row p-4" style="border: solid lightgray; border-radius: 15px;">
                            <div class="col-md-3 p-3">
                                    <p style="font-weight: 800;">NÚMERO DO CUPOM</p>
                                    <p style="color: #E00D13 ;font-weight: 800;"><?php echo ($line['numero']); ?></p>
                                </div>
                                <div class="col-md-2 p-3">
                                    <p style="font-weight: 800;">DATA</p>
                                    <p><?php echo date("d/m/Y", strtotime($line['datacadastro'])); ?></p>
                                </div>
                                
                                <div class="col-md-3 p-3">
                                    <p style="font-weight: 800;">TIPO</p>
                                    <p style="color: #8DA632;"><?php echo ($line['tipo'] == 1 ? 'Vale Compras' : 'Limousine');?></p>
                                </div>
                            </div>
                        </div>

                    <?php
                         }
                        }  else {  
                    ?>
                    
                    
                        <p style="font-weight: 800;"><br>- NENHUM NÚMERO ENCONTRADO!</p>                                
                    
                    
                    <?php
                         }                    
                    ?>
                        
                 

                    

                    
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar Cupom</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form id="cupom_form" action="controlers/salva_cupom.php" method="POST" >
                                    <input  id="cupom" class="input form-control"  name="cupom" type="text" placeholder="N° do Cupom*" maxlength="6" required/>
                                    <input  id="nf" class="input form-control" name="nf" type="text" placeholder="Nota Fiscal" required/><br/><br/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="submit" data-dismiss="modal" style="border-radius: 40px; background-color:#E00D13 ;color: #F2E5A2;"><b>FECHAR</b></button>
                    <button type="submit" class="submit" style="border-radius: 40px;"><b>SALVAR</b></button>
                </div>
                </form>
                </div>
            </div>
            </div>


            <br><br><br><br><br>
            </div>
    </body>

    <?php require "includes/footer.php";?>