<?php
//get data from form  

$Name = $_POST['Name'];
$Email= $_POST['Email'];
$Number= $_POST['Number'];
$Message= $_POST['Message'];

$to = "lyrealmedia@gmail.com";
$subject = "Lead Information from Vineyards Terrace Website";
$txt ="Name = ". $Name . "\r\n  Email = " . $Email . "\r\n Number = " . $Number . "\r\n Message =" . $Message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>