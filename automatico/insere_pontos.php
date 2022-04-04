<?php 
require "../config.php";

$id_logado = $id_cadastro;
$cpfCliente = (int)$cpf;

$hoje = date("Y-m-d"); 

$dataInicio = date('Y-m-d', strtotime("-30 days",strtotime($hoje)));  
$dataFinal = date("Y-m-d");
    
require("../controlers/consulta_pontos.php");

$hoje2 = date("Y-m-d H:i:s"); 

echo $variavel;
?>