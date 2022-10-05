<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];

$to = "fahboa2@gmail.com";   
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n subject = " . $subject . "\r\n Message =" . $message ;

$headers = "From: mail@faheemdev.com" . "\r\n" .
"CC: $email";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>