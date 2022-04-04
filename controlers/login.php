<?php
require "../config.php";
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

try {
    $cpf = str_replace('.','',$cpf);
    $cpf = str_replace('-','',$cpf);

    $pesquisa = $db->select("SELECT * FROM cadastro WHERE cpf = '$cpf' AND senha = '$senha' LIMIT 1");
    if($db->rows($pesquisa)){
       $busca = $db->expand($pesquisa);
       $_SESSION['nome_usuario_campanha'] = $busca['nome'];
       $_SESSION['id_usuario_campanha'] = $busca['id'];
       $id_logado = $_SESSION['id_usuario_campanha'];

       $cpfCliente = (int)$cpf;
       
       $hoje = date("Y-m-d"); 

       $dataInicio = date('Y-m-d', strtotime("-2 days",strtotime($hoje)));  
       $dataFinal = date("Y-m-d");
        
       require("consulta_pontos.php");
      

       header("Location: ../perfil");

    }else{
      $_SESSION['aviso'] = 1;
      $_SESSION['aviso-title'] = 'Erro';
      $_SESSION['aviso-type'] = 'error';
      $_SESSION['aviso-text'] = 'Login não encontrado';
      header("Location: ../participe");
    }
} catch (\Throwable $th) {
  echo $th;
}

?>
