<?php

class PESQUISAS {

    public function listarDados($logado){
        $db = new DB;
        $sql = $db->select("SELECT * FROM cadastro WHERE nome='$logado'");
        return $sql;
    }

    public function verificarExistencia($cpf){
        $db = new DB;
        $sql = $db->select("SELECT id FROM cadastro WHERE cpf = '$cpf'");
        if($db->rows($sql)){
            return true;
        }else{
            return false;
        }
    }

    public function verificarCupom($cupom){
        $db = new DB;
        $sql = $db->select("SELECT id FROM cupom WHERE numero = '$cupom'");
        if($db->rows($sql)){
            return true;
        }else{
            return false;
        }
    }

    public function insereCadastro($data){
        $db = new DB;
        $data['nasc'] = date("Y-m-d", strtotime(str_replace("/","-", $data['nasc'])));
        $cpf = str_replace('.','',$data['cpf']);
        $cpf = str_replace('-','',$cpf);
        $wpp = isset($data['whatsapp']) ? $data['whatsapp'] : '';
        $nov = isset($data['novidade']) ? $data['novidade'] : '';
        $regulamento = isset($data['regulamento']) ? $data['regulamento'] : '';
        return $db->select("INSERT INTO cadastro (nome,telefone,cpf,datanascimento,email,senha,cep,endereco,bairro,cidade,uf,datacadastro,whatsapp,novidade,regulamento) VALUES('{$data['name']}', '{$data['tel']}', '{$cpf}', '{$data['nasc']}', '{$data['email']}', '{$data['password']}', '{$data['cep']}', '{$data['end']}', '{$data['bairro']}', '{$data['cid']}', '{$data['uf']}', '".date("Y-m-d H:i:s")."', '{$wpp}', '{$nov}', '{$regulamento}')");
    }

    public function salvaCupom($data){
        $db = new DB;
        $tipo = ($data['cupom'][0] == 6 ? 1 : 2);
        return $db->select("INSERT INTO cupom (cadastro_id, numero, notafiscal, datacadastro, tipo) VALUES ({$_SESSION['id_usuario_campanha']},'{$data['cupom']}', '{$data['nf']}', '".date("Y-m-d H:i:s")."', '{$tipo}')");
    }

}