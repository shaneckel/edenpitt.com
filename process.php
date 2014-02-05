<?php

if( isset($_POST) ){
  
  $formok = true;

  $errors = array();
  $data = array();  
 
  $name = $_POST['name'];
  $message = stripslashes($_POST['message']);
  $email = $_POST['email'];  

  if (empty($_POST['name']) ){
    $errors['name'] = 'Name is required.';
    $formok = false;
  }

  if (empty($_POST['email']) ){
    $errors['email'] = 'Email is required.';
    $formok = false;
  }

  if (empty( $_POST['message']) ){
    $errors['message'] = 'A message is Required.';
    $formok = false;
  }

  if (empty($errors) && $formok) {
    $headers = "From: Eden <hello@edenpitt.com>" . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
 
    $emailbody = "<h1 style='font-size: 30px; color: #ed1c24; padding: 20px; font-family: sans-serif;'>Edenpitt.com</h1><h1 style='font-size:26px; padding: 20px; background: #ed1c24; color: white; font-family: sans-serif; font-weight: 300;'><span style='font-weight:900'>{$name}</span> sent you an email</h1><p style='font-size: 16px; padding:30px 20px;'>{$message}</p><h2 style='padding: 20px; font-size: 18px; background: #ed1c24; color: white; font-family: sans-serif;'>Their return email is. <strong style='color: white;'>{$email}</strong>.</h2>";
 
    $emailMessage = "Edenpitt.com Email";

    mail("shaneckel@gmail.com",$emailMessage,$emailbody,$headers);

    $data['success'] = true;
    $data['message'] = 'Your email was successfully sent at '. date('h:i A') . '.';
 
  }else{
    $data['success'] = false;
    $data['errors'] = $errors;
  }

  echo json_encode($data);

}