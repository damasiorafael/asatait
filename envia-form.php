<?php

require("includes/PHPMailer/class.phpmailer.php");

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
	
	$name = stripslashes($_POST['name']);
	$email = trim($_POST['email']);
	$subject = 'Contato do site';
	$message = stripslashes($_POST['message']);
	//$contactemail = 'Email Goes Here';
	
	
	$error = '';
	
	// Check name
	if(!$name){$error .= '<div class="alert alert-danger">Por favor digite seu nome</div>';}
	
	// Check email
	if(!$email){$error .= '<div class="alert alert-danger">Por favor digite seu e-mail</div>';}
	
	if($email && !ValidateEmail($email)){$error .= '<div class="alert alert-danger">Por favor informe um e-mail válido</div>';}
	
	// Check message (length)
	
	if(!$message || strlen($message) < 10){$error .= '<div class="alert alert-danger">Por favor digite ao menos 10 caracteres em sua mensagem</div>';}
	
	if(!$error){
		
		$mail = new PHPMailer();
		$mail->SetLanguage("br");
		$mail->IsMail();
		$mail->IsHTML(true);

		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465;

		$mail->Username = "angela@asatait.com.br"; // Gmail login
		$mail->Password = "cefas2000"; // Gmail sua-senha

		$mail->From = $email;
		$mail->FromName = $nome;
		$mail->AddAddress("angela@asatait.com.br");
		$mail->AddAddress("atendimento@asatait.com.br");
		//$mail->AddAddress($email);
		$mail->Subject = $subject;
		$mail->AddBcc("damasio.rafael@gmail.com");

		//$mail->MsgHTML($message);
		$mail->Body = "Nome: ".$name."<br /> E-mail: ".$email."<br /> Mensagem: ".$message;
	
	
		if($mail->Send()){
			
			echo 'OK';
		
		} else {
			
			echo '<div class="alert alert-danger">Tivemos um problema para enviar sua mensagem, por favor tente novamente!</div>';
			
		}
	
	} else {
		
		echo $error;
	
	}

}