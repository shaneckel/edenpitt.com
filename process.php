<?php

if( isset($_POST) ){
  date_default_timezone_set('US/Eastern');

  $formok = true;

  $errors = array();
  $data = array();

  $dataInput = json_decode(stripslashes(file_get_contents('php://input')));
  
  $name = $dataInput->name;
  $message = nl2br($dataInput->message);
  $email = $dataInput->email;

  if (empty( $dataInput->name) ){
    $errors['name'] = 'Name is required.';
    $formok = false;
  }

  if (empty( $dataInput->email) ){
    $errors['email'] = 'Email is required.';
    $formok = false;
  }

  if (empty( $dataInput->message) ){
    $errors['message'] = 'A message is Required.';
    $formok = false;
  }

  if (empty($errors) && $formok) {
    $headers = "From: Eden <hello@edenpitt.com>" . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
 
    $emailbody = "<h1 style='font-size: 30px; color: #ed1c24; padding: 20px 20px 10px 20px; font-family: sans-serif;'>Edenpitt.com</h1><h1 style='font-size:26px; padding: 20px; background: #ed1c24; color: white; font-family: sans-serif; font-weight: 300;'><span style='font-weight:900'>{$name}</span> sent you an email</h1><p style='font-size: 16px; padding:30px 20px; line-height: 22px;'>{$message}</p><p style='padding: 20px; font-size: 16px; border-top: 3px solid #ed1c24; color: black; font-family: sans-serif; font-weight: normal;'>Their return email is <strong style='color: #ed1c24; font-weight: bold;'>{$email}</strong>.</p>";
 
    $emailMessage = "Edenpitt.com Email";

    mail("shaneckel@gmail.com",$emailMessage,$emailbody,$headers);

    $data['success'] = true;
    $data['message'] = 'Your email was sent at '. date("g:i a") . '.';
 
  }else{
    $data['success'] = false;
    $data['errors'] = $errors;
  }

  echo json_encode($data);

}