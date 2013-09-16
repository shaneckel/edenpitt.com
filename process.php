<?php
if( isset($_POST) ){
	
	$formok = true;
	$errors = array();
	
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date('d/m/Y');
	$time = date('H:i:s');
	
	$name = $_POST['name'];	
	$email = $_POST['email'];
	$message = $_POST['message'];
		
	if(empty($name)){
		$formok = false;
		$errors[] = "You have not entered a name";
	}

	if(empty($message)){
		$formok = false;
		$errors[] = "You have not entered a message";
	}
	
	if($formok){
		$headers = "From: hello@edenpitt.com" . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		$emailbody = "<p>You have recieved a new message from the Eden contact form.</p>
					  <p><strong>Name: </strong> {$name} </p>
					  <p><strong>Email Address: </strong> {$email} </p>
					  <p><strong>Message: </strong> {$message} </p>
					  <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";
		
		mail("hilaryzozula@gmail.com","New Eden Contact",$emailbody,$headers);
		
	}
	
	$returndata = array(
		'posted_form_data' => array(
			'name' => $name,
			'email' => $email,
			'message' => $message
		),
		'form_ok' => $formok,
		'errors' => $errors
	);
		
	
	if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
		session_start();
		$_SESSION['cf_returndata'] = $returndata;
		
		header('location: ' . $_SERVER['HTTP_REFERER']);
	}
}
?>
