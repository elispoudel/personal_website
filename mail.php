<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['mail'];
$message= $_POST['message'];
$to = "poudelelis@gmail.com";
$subject = "Mail From my personal website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@elispoudel.com.np" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>