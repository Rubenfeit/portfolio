<?php

$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$message = $_POST['message'] ?? null;
$subject="lala";

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <'.$email.'>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

//send email
if ($name && $email && $message) {
    ini_set('sendmail_from', 'lala@gmail.com');
    ini_set('smtp_port', 'lala@gmail.com');
    mail($email, $subject, $message, $headers);
    return true;
}

return false;

?>