<?php
require "../config.php";
header('Content-type: text/html; charset=ISO-8859-1');

$verifica_cupom_existente = $pesquisas->verificarCupom($_POST['cupom']);


    if($verifica_cupom_existente == true){
        $_SESSION['aviso'] = 1;
        $_SESSION['aviso-title'] = 'Erro';
        $_SESSION['aviso-type'] = 'error';
        $_SESSION['aviso-text'] = 'Cupom ja foi cadastrado.';
        header("Location: ../cupom.php");
    }else{
        $insere_cadastro = $pesquisas->salvaCupom($_POST);
        if(!$insere_cadastro){
            $_SESSION['aviso'] = 1;
            $_SESSION['aviso-title'] = 'Erro';
            $_SESSION['aviso-type'] = 'error';
            $_SESSION['aviso-text'] = 'Ocorreu um erro ao cadastrar o cupom.';
            header("Location: ../cupom.php");
        }else{
            $_SESSION['aviso'] = 1;
            $_SESSION['aviso-title'] = 'Pronto';
            $_SESSION['aviso-type'] = 'success';
            $_SESSION['aviso-text'] = 'Cupom cadastrado com sucesso.';
            header("Location: ../cupom.php");
        }
    }



    
    
?>