<?php
$to = "rexex.webdev@gmail.com";
$subject = "Pytanie od $name";
$from = $email;
// mail headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "Od: <$from>" . "\r\n";
$headers .= 'Do: remontymarcina@gmail.com' . "\r\n";
// message template
$message = $question;

// send
mail($to,$subject,$message,$headers);


?>
