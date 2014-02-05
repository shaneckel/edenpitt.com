<?php

if( isset($_POST) ){
  
  $errors   = array();
  $data     = array();  
    
  if (empty($_POST['name']))
    $errors['name'] = 'Name is required.';

  if (empty($_POST['email']))
    $errors['email'] = 'Please include an email.';

  if (empty($_POST['message']))
    $errors['message'] = 'Please include a message.';

  if (!empty($errors)) {
    $headers = "Edenpitt.com email from " . $name .  ".\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $emailbody = "<h2>Hey Hilary.</h2>
                  <h3>{$name} Has sent you an email.</h3>
                  <p>{$message}</p>
                  <p>Their email is:</p>
                  <h2>{$email}</h2> 
                  <p>:)</p>"

    //mail("hilaryzozula@gmail.com","New Eden Contact",$emailbody,$headers);
    mail("shaneckel@gmail.com", "Edenpitt.com email from " . $name .  "." , $emailbody, $headers);
    
    $data['success'] = true;
    $data['message'] = 'Your email was successfully sent on '. date('l jS \of F Y h:i:s A');
 
  }else{
    $data['success'] = false;
    $data['errors']  = $errors;
  }
  echo json_encode($data);
}else{
  echo json_encode("{'error': 'not post'}");
}