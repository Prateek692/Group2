<?php

$to_email="prateek.mishra061001@gmail.com";
$subject="Simple test email by PHP.";
$body="Hi, this is test email sent by PHP script in 2020";
$headers="From: prateek.mishra061001@gmail.com";

if(mail($to_email, $subject, $body, $headers)){
    echo "Email successfully sent to $to_email...";
}
else {
    echo "Failure......";
}
?>