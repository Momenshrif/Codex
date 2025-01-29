<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';    

$email_subject = 'New Form Submission: ';

$email_body = "user name: $name.\n".
               "user email: $visitor_email.\n".
               "user subject: $subject.\n".
               "user message: $message.\n";


$to = "gamy.gm38@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page
header('Location: thankyou.html');

exit;


?>