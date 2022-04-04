<?php
require "../config.php";
header('Content-type: text/html; charset=ISO-8859-1');

$verifica_cpf = validaCPF($cpf);

$verifica_cpf_existente = $pesquisas->verificarExistencia($cpf);

if($verifica_cpf == true){

    if($verifica_cpf_existente == true){
        $_SESSION['aviso'] = 1;
        $_SESSION['aviso-title'] = 'Erro';
        $_SESSION['aviso-type'] = 'error';
        $_SESSION['aviso-text'] = 'CPF ja foi cadastrado.';
        header("Location: ../participe");
    }else{
        $insere_cadastro = $pesquisas->insereCadastro($_POST);
        if(!$insere_cadastro){
            $_SESSION['aviso'] = 1;
            $_SESSION['aviso-title'] = 'Erro';
            $_SESSION['aviso-type'] = 'error';
            $_SESSION['aviso-text'] = 'Ocorreu um erro ao realizar o cadastro.';
            header("Location: ../cadastro");
        }else{
            $_SESSION['aviso'] = 1;
            $_SESSION['aviso-title'] = 'Pronto';
            $_SESSION['aviso-type'] = 'success';
            $_SESSION['aviso-text'] = 'Cadastro efetuado com sucesso.';
            header("Location: ../participe");
        }
    }

}else {
    $_SESSION['aviso'] = 1;
    $_SESSION['aviso-title'] = 'Erro';
    $_SESSION['aviso-type'] = 'error';
    $_SESSION['aviso-text'] = 'CPF é invalido.';
    header("Location: ../home");
}

    
    
?>