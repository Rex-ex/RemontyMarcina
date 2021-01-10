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
  // $sum = test_input($_POST["captcha_sum"]);

  // test
  // $a = $first_number + $second_number;
  // echo "Sum is $sum". "\r\n";
  // echo "First is $first_number". "\r\n";
  // echo "Second is $second_number". "\r\n";
  // echo "Answer is $a". "\r\n";
  // mail send
    if (isset($name, $email, $question)){
      // mail template
      include 'mail_template.php';
      include 'form_modal_template.php';
      // true to mail!!!!
      if (mail == true){
        showModal($msg_mailDone);
        unset ($name, $email, $tel, $question);
        unset ($_POST['submit']);
      } else {
        showModal($msg_mailFail);
      }


    } else {
      showModal($msg_error);
    }

}


?>
