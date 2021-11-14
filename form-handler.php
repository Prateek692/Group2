<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from = 'info@yourwebsite.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                    "User Message: $message .\n";
$to = $visitor_email;
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
if(mail($to,$email_subject,$email_body,$headers)){
echo('Mail sent successfully!!!');}
header("Location: contact.html");
?>