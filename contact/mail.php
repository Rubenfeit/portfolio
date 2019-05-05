<?php

$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$message = $_POST['message'] ?? null;
$subject="Question Portfolio";

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <'.$name.'>' . "\r\n";
$headers .= 'From: Your mail <'.$email.'>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

//send email
if ($name && $email && $message) {
    //ini_set('sendmail_from', 'lala@gmail.com');
    //ini_set('smtp_port', 'lala@gmail.com');

     $response = mail('rubenfeiteira@gmail.com', $subject, $message, $headers);
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(false);
}
?>