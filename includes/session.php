<?php
    
    if(!isset($_SESSION['id_usuario_campanha'])){
        header('location: home');
    }
    
    $logado = $_SESSION['nome_usuario_campanha'];
    $id_logado = $_SESSION['id_usuario_campanha'];
    
?>