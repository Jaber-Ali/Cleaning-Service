<?php
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "info@expresswashing.se";

mail($recipient, $subject, $message, $mailheader) or die("Error!");
header("Location:success.html");

echo'The email has been sent succefully';
?>