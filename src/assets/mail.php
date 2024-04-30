<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = yashodip1302@gmail.com;
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n
Message =" . $message;
$headers = "From: Yashodip-portfolio.com" . "\r\n" .
"CC: Contact-form.com";
if($email!=NULL){
   mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:thankyou.html");
?>