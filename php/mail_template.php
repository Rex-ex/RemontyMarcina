<?php
$to = "remontymarcina@gmail.com";
$subject = "Pytanie od $name";
$from = $email;
$phone = $tel;
// mail headers
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "Od: <$from>" . "\r\n";
$headers .= 'Do: remontymarcina@gmail.com' . "\r\n";
// message template
$message = "To jest wiadomość od: $name" . "\r\n";
$message .= "E-mail klienta: $from" . "\r\n";
$message .= "Telefon klienta: $phone" . "\r\n";
$message .= "Pytanie klienta: $question" . "\r\n";

// do głownego pliku!!!
// send
mail($to,$subject,$message,$headers);


?>
