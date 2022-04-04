<?php
ini_set('max_execution_time', '0');
ini_set('display_errors' , 1);
require "../config.php";

function gera_cupom($row){
    global $db;
    $id = $row['id_cupom'];
    $hash = rand(1, 999999);
    $hash = str_pad($hash, 6, '0', STR_PAD_LEFT);
    $valida = $db->select("SELECT id_cupom FROM cupons_gerados WHERE num_gerado='{$hash}'");
    $valida = $db->multi($valida);
    if(!$valida){
        $update = $db->select("UPDATE cupons_gerados SET num_gerado='{$hash}' WHERE id_cupom={$id}");
    }else{
        gera_cupom($row);
    }
}
try {
    $sql = $db->select("SELECT * FROM cupons_gerados WHERE num_gerado IS NULL OR num_gerado='' OR num_gerado=0");
    $rows = $db->multi($sql);
    if($rows){
        foreach($rows as $indice => $row){
            gera_cupom($row);
        }
    }
	echo 'Foi :)';
} catch (\Throwable $th) {
    echo $th;
}



?>