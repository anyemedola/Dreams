<?php
require "../config.php";

$cpf = str_replace('.','',$cpf);
  $cpf = str_replace('-','',$cpf);

    $pesquisa = $db->select("SELECT senha, email FROM cadastro WHERE cpf = '$cpf' LIMIT 1");
    if($db->rows($pesquisa)){
       $busca = $db->expand($pesquisa);
       $_SESSION['cpf_pesquisado'] = $cpf;
       $_SESSION['email_pesquisado'] = $busca['email'];
       $_SESSION['senha_pesquisado'] = $busca['senha'];
       header("Location: mail_cadastro.php");

    }else{
      $_SESSION['aviso'] = 1;
      $_SESSION['aviso-title'] = 'Erro';
      $_SESSION['aviso-type'] = 'error';
      $_SESSION['aviso-text'] = 'Cadastro nПлкo encontrado.';
      header("Location: ../home");
    }
?>