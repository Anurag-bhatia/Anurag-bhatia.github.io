<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "contact.anuragbhatia@gmail.com";
$txt ="Mail from Anuragbhatia.me\r\n" . "Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subject "\r\n Message =" . $message;
$headers = "From: noreply@anuragbhatia.me" . "\r\n" .
"CC: anuragbhatia.me@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>