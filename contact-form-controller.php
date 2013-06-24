<?php

$name = stripslashes(strip_tags($_POST['name']));
$email = stripslashes(strip_tags($_POST['email']));
$phone = stripslashes(strip_tags($_POST['phone']));
$message = stripslashes(strip_tags($_POST['message']));

$responseMessage = "Thank you, " .$name . " we will be in touch soon.";
$errorMessage = "Sorry,".$name.", something went wrong. Our technicians have been notified and we're looking into it";
$status = 'success';

$emailMessage = "<h1>$name</h1>";
$emailMessage .= "<p><strong>Phone: </strong>$phone</p>";
$emailMessage .= "<p><strong>Email: </strong>$email</p>";
$emailMessage .= "<p><strong>Message:</strong><br>$message</p>";

$headers = 'From: "'. $name .'" <' .$email. ">\r\n" .
    'Content-Type:text/html;charset=utf-8' . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$status = 0;

$status = mail('matt@mattsharpe.co.uk','Enquiry from Rotaract Website', $emailMessage, $headers);

if($status == 0)
	$responseMessage = $errorMessage = "Sorry,".$name.", something went wrong. Our technicians have been notified and we're looking into it";

echo "{\"status\": $status, \"message\": \"$responseMessage\"}";

?>