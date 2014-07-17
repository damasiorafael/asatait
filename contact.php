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
	
	$name = stripslashes($_POST['name']);
	$email = trim($_POST['email']);
	$subject = 'Someone Has Contacted You From Your Website';
	$message = stripslashes($_POST['message']);
	$contactemail = 'Email Goes Here';
	
	
	$error = '';
	
	// Check name
	if(!$name){$error .= '<div class="alert alert-danger">Please enter your name</div>';}
	
	// Check email
	if(!$email){$error .= '<div class="alert alert-danger">Please enter an e-mail address</div>';}
	
	if($email && !ValidateEmail($email)){$error .= '<div class="alert alert-danger">Please enter a valid e-mail address</div>';}
	
	// Check message (length)
	
	if(!$message || strlen($message) < 10){$error .= '<div class="alert alert-danger">Please enter your message. It should have at least 10 characters</div>';}
	
	if(!$error){
		
		$headers = 'From:' . $name . ' ' . '<'.$email.'>' . "\r\n";
		
		$mail = mail( $contactemail, $subject, $message, $headers );
	
	
		if($mail){
			
			echo 'OK';
		
		} else {
			
			echo '<div class="alert alert-danger">There was a problem sending your email, please try again!</div>';
			
		}
	
	} else {
		
		echo $error;
	
	}

}