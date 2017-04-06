<?php
 
// Get values from form
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];

 
$to = "fblink@gmail.com";
$subject = "ABA Contact Form";
$message = " Name: " . $name . "\r\n Phone: " . $phone . "\r\n Email: " . $email;
 
 
$from = "Contact@Autobuyeradvisor.com";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://www.autobuyeradvisor.com/success.html';</script>";
}else{
  echo "Error! Please try again.";
}
 