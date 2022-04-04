<?php 
@session_start();

date_default_timezone_set('America/Sao_Paulo');

$host = $_SERVER['HTTP_HOST'];


//LOCALHOST//
if($_SERVER['HTTP_HOST']=='localhost' || $_SERVER['HTTP_HOST']=='192.168.0.169' || $_SERVER['HTTP_HOST']=='192.168.0.194') {	
	
	define("PATH", 'http://'.$_SERVER['HTTP_HOST'].'/campanha/');
	define("HOST", "localhost");
	define("DBNAME", "dreams_db");
	define("USER", "root");
	define("PASSWORD", "");

	ini_set("display_errors", "1");
	ini_set("display_errors", "On");	
	ini_set('max_execution_time', 0);

//WEB//	
} else {	

	define("PATH", 'https://'.$_SERVER['HTTP_HOST'].'/');
	define("HOST", "localhost");
	define("DBNAME", "nataldre_dreams");
	define("USER", "nataldre_db");
	define("PASSWORD", "inicial2021");

	ini_set("display_errors", "1");
	ini_set("display_errors", "On");	
	ini_set('max_execution_time', 0);

}


require 'class/class.db.php';
require 'class/class.seguranca.php';
require 'class/class.pesquisas.php';
// require 'class/class.upload.php';
require 'class/class.funcoes.php';





$pesquisas = new PESQUISAS();

?>