<?php
$name = $_POST['name'];
$mobile_number = $_POST['number'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message']:

$email_from = 'info@codescrafters.in';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
"User Number: $mobile_number.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n".

$to = 'rahul.verma@codescrafters.in';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>