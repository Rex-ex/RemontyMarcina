<?php
// isset submit
if (isset($_POST['submit'])){
  // security function
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  // collet var from client form
  $name = test_input($_POST["client_name"]);
  $email = test_input($_POST["client_email"]);
  $tel = test_input($_POST["client_tel"]);
  $question = test_input($_POST["client_question"]);
  $sum = test_input($_POST["client_sum"]);

  // mail send
    if (isset($name, $email, $question, $sum)){
      // mail template
      include 'mail_template.php';
      if (mail == true){
        echo "mail wysłany";
      } else {
        echo "coś poszło nie tak!";
      }      
      // unset ($name, $email, $tel, $question, $sum);
      // e-mail z potwierdzeniem do klienta???
    } else {
      echo "błąd w formularzu";
    }

}


?>
