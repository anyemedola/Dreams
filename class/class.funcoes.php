<?php 
    function validaCPF($cpf) {

        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
            
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;

    }

    function timerSorteio(){
        $hoje = new DateTime();
        $sorteio1 = new DateTime('2021-09-29 00:00:00');
        $sorteio2 =  new DateTime('2021-10-30 00:00:00');
        $sorteio3 =  new DateTime('2021-11-27 00:00:00');
        $sorteio4 =  new DateTime('2021-12-29 00:00:00');
        $arrayTimer = array();
    
        $dias = '00';
        $horas = '00';
        $minutos = '00';
    
        if($hoje <= $sorteio1){
    
            $mes = $sorteio1->diff($hoje)->format('%m');
            $dias = $sorteio1->diff($hoje)->format('%d');
            $horas = $sorteio1->diff($hoje)->format('%h');
            $minutos = $sorteio1->diff($hoje)->format('%i');
            $calculo = $mes * 30;
            $dias = $calculo + $dias;
    
            $arrayTimer = array("dias"=>"$dias", "horas"=>"$horas", "minutos"=>"$minutos");
    
        }else if($hoje <= $sorteio2){
    
            $mes = $sorteio1->diff($hoje)->format('%m');
            $dias = $sorteio2->diff($hoje)->format('%d');
            $horas = $sorteio2->diff($hoje)->format('%h');
            $minutos = $sorteio2->diff($hoje)->format('%i');
            $calculo = $mes * 31;
            $dias = $calculo + $dias;
    
            $arrayTimer = array("dias"=>"$dias", "horas"=>"$horas", "minutos"=>"$minutos");
        }else if($hoje <= $sorteio3){
    
            $mes = $sorteio1->diff($hoje)->format('%m');
            $dias = $sorteio3->diff($hoje)->format('%d');
            $horas = $sorteio3->diff($hoje)->format('%h');
            $minutos = $sorteio3->diff($hoje)->format('%i');
            $calculo = $mes * 30;
            $dias = $calculo + $dias;
    
            $arrayTimer = array("dias"=>"$dias", "horas"=>"$horas", "minutos"=>"$minutos");
        }else if($hoje <= $sorteio4){
    
            $mes = $sorteio1->diff($hoje)->format('%m');
            $dias = $sorteio4->diff($hoje)->format('%d');
            $horas = $sorteio4->diff($hoje)->format('%h');
            $minutos = $sorteio4->diff($hoje)->format('%i');
            $calculo = $mes * 31;
            $dias = $calculo + $dias;
    
            $arrayTimer = array("dias"=>"$dias", "horas"=>"$horas", "minutos"=>"$minutos");
        }else{
            $arrayTimer = array("dias"=>"$dias", "horas"=>"$horas", "minutos"=>"$minutos");
        }
    
    
        return $arrayTimer;

    }





    function NumeroSorte($a){

        $count = strlen($a);

        if($count==1){$a = '00000'.$a;}
		if($count==2){$a = '0000'.$a;}
        if($count==3){$a = '000'.$a;}
        if($count==4){$a = '00'.$a;}
        if($count==5){$a = '0'.$a;}

        return $a;

    }

    function ValidoSorteio($a){

        $sorteio1 = date('2021-10-01');
        $sorteio2 =  date('2021-10-30');
        $sorteio3 =  date('2021-11-29');
        $sorteio4 =  date('2022-01-03');

        if($a <= $sorteio1){
            return data_mysql_para_user($sorteio1);
        }else if($a <= $sorteio2){
            return data_mysql_para_user($sorteio2);
        }else if($a <= $sorteio3){
            return data_mysql_para_user($sorteio3);
        }else{
            return data_mysql_para_user($sorteio4);
        }

    }

    function ValidarSorteio($a){

        $hoje = date('Y-m-d');
        $sorteio1 = date('2021-09-29');
        $sorteio2 =  date('2021-10-30');
        $sorteio3 =  date('2021-11-27');
        $sorteio4 =  date('2021-12-29');
        $retorno = '';

        if($a <= $sorteio1){
            if($hoje <= $sorteio1){
                $retorno = 'Valido';
            }else{
                $retorno = 'Expirado';
            }
        }else if($a <= $sorteio2){
            if($hoje <= $sorteio2){
                $retorno = 'Valido';
            }else{
                $retorno = 'Expirado';
            }
        }else if($a <= $sorteio3){
            if($hoje <= $sorteio3){
                $retorno = 'Valido';
            }else{
                $retorno = 'Expirado';
            }
        }else{
            if($hoje <= $sorteio4){
                $retorno = 'Valido';
            }else{
                $retorno = 'Expirado';
            }
        }

        return $retorno;
    }

?>