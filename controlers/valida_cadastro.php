<?php
require "../config.php";
header('Content-type: text/html; charset=ISO-8859-1');

$verifica_cpf = validaCPF($cpf);

$cpf = str_replace('.','',$cpf);
$cpf = str_replace('-','',$cpf);

$verifica_cpf_existente = $pesquisas->verificarExistencia($cpf);

if($verifica_cpf == true){

    if($verifica_cpf_existente == true){
        $_SESSION['aviso'] = 1;
        $_SESSION['aviso-title'] = 'Erro';
        $_SESSION['aviso-type'] = 'error';
        $_SESSION['aviso-text'] = 'CPF ja foi cadastrado.';
        header("Location: ../participe");
    }else{
        header("Location: ../cadastro");
    }

}else {
    $_SESSION['aviso'] = 1;
    $_SESSION['aviso-title'] = 'Erro';
    $_SESSION['aviso-type'] = 'error';
    $_SESSION['aviso-text'] = 'CPF é invalido.';
    header("Location: ../home");
}

    
    
?>