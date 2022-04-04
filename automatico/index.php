<?php
require "../config.php";
    // if($db->rows($sql)){
    //     while($row = $db->expand($sql)){
            
    //     $id_logado = $row['id_cadastro'];
    //     echo  $cpfCliente = (int)$row['cpf'];
    //     echo '<br>';
        
    //     $hoje = date("Y-m-d"); 

    //     $dataInicio = date('Y-m-d', strtotime("-2 days",strtotime($hoje)));  
    //     $dataFinal = date("Y-m-d");
            
    //     require("../controlers/consulta_pontos.php");
    //     }
    //     $hoje2 = date("Y-m-d H:i:s"); 

    //     $db->select("INSERT INTO automatico SET data = '$hoje2' ");
    // }



?>
<center><br><br>
        <h2>QTD DE REGISTRO: <span id="qtd">0</span></h2>
        <div id="lista"></div>

</center>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src='arquivo.js'></script>
