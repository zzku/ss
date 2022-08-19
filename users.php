<?php 
ob_start();
$API_KEY = "1913685619:AAFIc7OJJFWGlRNBbReuupwUuRGRAR2pXdo";#توكن البوت
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));}else{
return json_decode($res);}}

$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;

if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"/check",
]);
}


$a = substr(str_shuffle('abcdefghijklmnopqrstuvwqyz1234567890'),1,1);
$b = substr(str_shuffle('abcdefghijklmnopqrstuvwqyz1234567890'),1,1);
$c = substr(str_shuffle('abcdefghijklmnopqrstuvwqyz1234567890'),1,1);
$d= substr(str_shuffle('abcdefghijklmnopqrstuvwqyz1234567890'),1,1);
$e = substr(str_shuffle('abcdefghijklmnopqrstuvwqyz1234567890'),1,1);
$f = substr(str_shuffle('abcdefghijklmnopqrstuvwqyz1234567890'),1,1);
$g = substr(str_shuffle('abcdefghijklmnopqrstuvwqyz1234567890'),1,1);
$user1 = "$a$a$b$c$c";
$user2 = "$a$b$a$b$a$b";
$user3 = "$c$c$c$c$c$c$a$c";
$user4 = "$e$g$g$g$g$c";
$user5 = "$f$f$f$a$a$c";
$user5 = "$a$a$b$c$f";
$user7= "$a$b$a$b$a$c";
$user8= "$c$c$c$c$c$c$a$d";
$user9= "$e$g$g$g$g$g";
$user10= "$f$f$f$a$a$e";


if($text == "/check"){
$api = file_get_contents("http://sero2link.ml/API/V1/Bh7.php?user=$user1");
$api1= file_get_contents("http://sero2link.ml/API/V1/Bh7.php?user=$user2");
$api2= file_get_contents("http://sero2link.ml/API/V1/Bh7.php?user=$user3");
$api3= file_get_contents("http://sero2link.ml/API/V1/Bh7.php?user=$user4");
$api4= file_get_contents("http://sero2link.ml/API/V1/Bh7.php?user=$user5");
$api5 = file_get_contents("http://sero2link.ml/API/V1/Bh7.php?user=$user6");
$api6= file_get_contents("http://sero2link.ml/API/V1/Bh7.php?user=$user7");
$api7= file_get_contents("http://sero2link.ml/API/V1/Bh7.php?user=$user8");
$api8= file_get_contents("http://sero2link.ml/API/V1/Bh7.php?user=$user9");
$api9= file_get_contents("http://sero2link.ml/API/V1/Bh7.php?user=$user10");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
user : @$user1 : $api

user : @$user2 : $api1

user : @$user3 : $api2

user : @$user4 : $api3

user : @$user5 : $api4

user : @$user6 : $api5

user : @$user7 : $api6

user : @$user8 : $api7

user : @$user9 : $api8

user : @$user10 : $api9


",
]);
}