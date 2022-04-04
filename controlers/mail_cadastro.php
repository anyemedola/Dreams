<?php
ob_start();
session_start();

require ('../mailer/PHPMailerAutoload.php');

require ("../class/class.db.php");





	$cpf = $_SESSION['cpf_pesquisado'];
	$email = $_SESSION['email_pesquisado'];
	$senha = $_SESSION['senha_pesquisado'];
	


		$hoje = date('Y-m-d H:i:s');

		$body = "<h3>Aniversário Premiado Drogaria Santa Marta</h3>";

		$body.= "<h5>Recuperação de senha</h5>";

		$body.= "CPF: " . $cpf . "<br>";

		$body.= "Senha: " . $senha . "<br>";

		$body.= "<small>Enviado " . date('d/m/Y \à\s H:i') . "</small><br>";



		

		$mail = new PHPMailer();

			$mail->isSMTP();

			$mail->CharSet = 'UTF-8';

			$mail->SetLanguage('br', 'language/');

			$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas

			$mail->SMTPSecure = 'tls';	// SSL REQUERIDO pelo GMail

			$mail->Host = 'srv74.prodns.com.br';	// SMTP utilizado

			$mail->Port = 587;  		

			$mail->Username = 'noreply@sisconnection.com.br';

			$mail->Password = 'inicial2011';

			$mail->AddAddress ($email, 'Usuário');

			$mail->setFrom('noreply@sisconnection.com.br', 'DROGARIA SANTA MARTA');

			$mail->SMTPAuth = true;

			$mail->isHTML(true);

			$mail->Subject = "Recuperação de senha.";

			$mail->Body = $body;

			$mail->AltBody = strip_tags($body);


	


		if (!$mail->send()) {

		// echo "Mailer Error: " . $mail->ErrorInfo;

		$_SESSION['aviso'] = 1;
		$_SESSION['aviso-title'] = 'Erro';
		$_SESSION['aviso-type'] = 'error';
		$_SESSION['aviso-text'] = 'Email não enviado.';

		} else {

		// echo "Message sent!";

		$_SESSION['aviso'] = 1;
		$_SESSION['aviso-title'] = 'Sucesso!';
		$_SESSION['aviso-type'] = 'success';
		$_SESSION['aviso-text'] = 'Email enviado.';

		}
	


		header("Location: ../home");

?>