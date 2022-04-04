<?php
@session_start();
    unset($_SESSION['nome_usuario_campanha']);
    unset($_SESSION['id_usuario_campanha']);
    header("Location: home");
?>