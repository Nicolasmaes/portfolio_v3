<?php
if(isset($_POST['visitor_email'])&& !empty($_POST['visitor_email'])){
    $email = $_POST['visitor_email'];
    $name = $_POST['visitor_name'];
    $objet = 'contact depuis le site web';
    $message = $_POST['visitor_message'];
    $recipient = 'nicolas.maes1@gmail.com';
    $send = 'message envoyé par '.$name.','.$email.' : '.$message;
    $headerFields = array(
      "From: {$email}",
      "MIME-Version: 1.0",
      "Content-Type: text/html;charset=utf-8"
      );
    mail($recipient, $objet, $send, implode("\r\n", $headerFields));
    echo "message envoyé à ".$recipient;
    echo ' <br><a href="../front/pages/contact.php">Back</a>';
}
else{
  echo 'erreur';
}
?>

<!-- mail(
    string $to,
    string $subject,
    string $message,
    array|string $additional_params = [],
    string $additional_params = ""
): bool -->