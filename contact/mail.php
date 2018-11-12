<?php
if($_POST){
    $name = ($_POST['nombre']=="")?false:$_POST['nombre'];
    $email = ($_POST['email']=="")?false:$_POST['email'];
    $message = ($_POST['message']=="")?false:$_POST['message'];
    $subject="lala";
    
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Your name <'.$email.'>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

//send email
    if($name != false & $email!=false & $message!= false){
        //mail($email, $subject, $message, $headers);
        return true;
    }
    }

return false;

?>