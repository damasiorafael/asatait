<?php

$post = (!empty($_POST)) ? true : false;

if($post){
	function ValidateEmail($value){
		$regex = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
		if($value == '') { 
			return false;
		} else {
			$string = preg_replace($regex, '', $value);
		}
		return empty($string) ? true : false;
	}
	
	$name = stripslashes($_POST['nome']);
	$email = trim($_POST['email']);
	$subject = 'Someone Has Contacted You From Your Website';
	$message = stripslashes($_POST['mensagem']);
	$contactemail = 'damasio_damasio@hotmail.com';
	
	$error = '';
	
	// Check name
	if(!$name){$error .= '<div class="alert alert-danger">Por favor digite seu nome!</div>';}
	
	// Check email
	if(!$email){$error .= '<div class="alert alert-danger">Por favor digite um endereço de e-mail!</div>';}
	if($email && !ValidateEmail($email)){$error .= '<div class="alert alert-danger">Por favor digite um endereço de e-mail válido!</div>';}
	
	// Check message (length)	
	if(!$message || strlen($message) < 10){$error .= '<div class="alert alert-danger">Por favor digite sua mensagem. Ela deve conter ao menos 10 caracteres!</div>';}
	
	if(!$error){
		$headers = 'From:' . $name . ' ' . '<'.$email.'>' . "\r\n";
		$mail = mail( $contactemail, $subject, $message, $headers )
	
		if($mail){
			echo 'E-mail enviado com sucesso!';
		} else {
			echo '<div class="alert alert-danger">Tivemos um problema para enviar seu e-mail, Por favor tente novamente!</div>';
		}
	} else {
		echo $error;
	}
}