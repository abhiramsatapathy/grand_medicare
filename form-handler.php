<?php
$name = $_POST['name'];
$contact_no = $_POST['contactno'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@grandmedicare.com';

$email_subject = 'New From Submission';

$email_body = "User Name: $name.\n".
              "User Contact: $contact_no.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";

 $to = "grand.medicare1@gmail.com";
 
 $headers = "From: $email_from \r\n";

 $headers .= "Reply-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header("Location: contact.html");
?>