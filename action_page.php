<?php
if(isset($_POST['submit']))
{
  echo "error;you need to submit the form!";
}
$name = $_POST['fname'];
$lastname = $_POST['lname'];
$country = $_POST['country'];
$subject = $_POST['subject'];

if(emprty($name)||empty($visitor_email))
{
  echo"Name and email are mandatory!";
  exit;
}
$email_from = 'enriquepantojac@gmail.com';
$email_subject = "New form submission";
$email_body = "You have received a new message from the user $name.\n".
  "email adress: @visitor_email\n".
  "Here is the message:\n $subject".
  
$to = "enriquepantojac@gmail.com";
$headers = "From: $email_form \r\n";

mail($to,$email_subject,$email_body,$headers);
echo "Thank you, you message has been sent!";
