<?php
ini_set('max_execution_time', '0');
ini_set('display_errors' , 1);
require "../config.php";
try {
    $sql = $db->select("SELECT * FROM cupons_gerados");
    if($db->rows($sql)){
        while($row = $db->expand($sql)){
            $id = $row['id_cupom'];
            $hash = rand(1, 999999);
            $hash = str_pad($hash, 6, '0', STR_PAD_LEFT);
            $valida = $db->select("SELECT id_cupom FROM cupons_gerados WHERE num_gerado='{$hash}'");
            if(!$valida){
                $update = $db->select("UPDATE cupons_gerados SET num_gerado='{$hash}' WHERE id_cupom={$id}");
            }
        }
    }
	echo 'Foi :)';
} catch (\Throwable $th) {
    echo $th;
}



?>