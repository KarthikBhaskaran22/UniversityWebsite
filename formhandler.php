<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$tel = $_POST['tel'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@ru.edu.in';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "visitor_email: $visitor_email.\n".
              "tel: $tel.\n".
              "Subject: $subject.\n".
              "message: $message.\n";

$to = 'abc@gmail.com'

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>