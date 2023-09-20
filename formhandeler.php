<?php
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'shantanu2rana@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $visitor_message.\n";


$to = 'shantanu2002rana@gmail.com';
$headers = "Form: $email_from \r\n";

$headers .= "reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact-html");

?>