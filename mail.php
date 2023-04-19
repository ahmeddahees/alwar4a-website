<?php
if (isset( $_POST['clicktosend'])) {

if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="المرسل: $name \n الايميل: $email \n الرسالة: $message";
$recipient = "ahmeddahees6@gmail.com ";
$mailheader = "المرسل: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
}