<?php

if( isset($_POST) ){
  
  $errors   = array();
  $data     = array();  
  $formok   = true;

  $name     = $_POST['name'];
  $message  = $_POST['message'];
  $email    = $_POST['email'];  

  if (empty($name)){
    $errors['name'] = 'Name is required.';
    $formok = false;
  }else{
    $errors['name'] = 'Name is not empty.';
  }

  if (empty($email)){
    $errors['email'] = 'Please include an email.';
    $formok = false;
  }

  if (empty($message)){
    $errors['message'] = 'Please include a message.';
    $formok = false;
  }

  if ($formok) {
    $headers = "Edenpitt.com email from {$name}" . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $emailbody = "<p>Eden Email Form</p>
            <p><strong>Name: </strong> {$name} </p>
            <p><strong>Email Address: </strong> {$email} </p>
            <p><strong>Message: </strong> {$message} </p>
            <p>This message was sent from the IP Address: </p>";
 
    $emailMessage = "EdenPitt Email from {$name}.";

    mail("shaneckel@gmail.com",$emailMessage,$emailbody,$headers);

    $data['success'] = true;
    $data['message'] = 'Your email was successfully sent on '. date('l jS \of F Y h:i:s A');
 
  }else{
    $data['success'] = false;
    $data['errors']  = $errors;
  }

  echo json_encode($data);

}