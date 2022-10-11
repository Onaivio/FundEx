<?php 
if(isset($_POST['name'])){

  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  $to = "onaivio220@gmail.com";

  if(mail($to, $subject, $message, $subject)){
    echo "Email Snet Successfuly ...";
  }else{
    echo "Couldn't deliver the email due to some error ..";
  }
}

?>