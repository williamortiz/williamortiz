<?php

// Get values from form
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to = "chi69@mindspring.com";
$subject = "Williamortiz.net Contact";
$message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Message: " . $message;


$from = "William Ortiz";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://www.williamortiz.net/success.html';</script>";
}else{
  echo "Error! Please try again.";
}


?>
