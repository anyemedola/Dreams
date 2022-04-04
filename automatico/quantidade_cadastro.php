<?php 
require "../config.php";
$hoje2 = date("Y-m-d H:i:s"); 
$sql = $db->select("SELECT cpf, id_cadastro FROM cadastro");
$db->select("INSERT INTO automatico SET data = '$hoje2' ");
echo json_encode(mysqli_fetch_all($sql, MYSQLI_ASSOC));
?>