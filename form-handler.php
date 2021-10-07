<?php
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$massage = $_POST["massage"];

$email_from = 'myweb@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "subject: $subject.\n".
              "User Massage: $massage.\n";

$to = 'azzamfauzan40@gmail.com';

$header = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header ("Location: contact.html");

?>
