<?php
session_start();

$dbHost = 'localhost';
$dbName = 'tutorials';
$dbUsername = 'root';
$dbPassword = '';
$conn= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['send_email'])){
    $login=$_REQUEST['login_var'];
    $asunto=$_REQUEST['asunto_var'];
    $mensaje=$_REQUEST['mensaje_var'];

    $FromName=$_REQUEST['login_var'];
    $FromEmail="no_reply@technosmarter.com";
    $ReplyTo="technosmarterinfo@gmail.com";
    $credits="All rights are reserved | Techno Smarter "; 
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: ".$FromName." <".$FromEmail.">\n";
    $headers .= "Reply-To: ".$ReplyTo."\n";
    $headers .= "X-Sender: <".$FromEmail.">\n";
    $headers .= "X-Mailer: PHP\n"; 
    $headers .= "X-Priority: 1\n"; 
    $headers .= "Return-Path: <".$FromEmail.">\n"; 
    $subject="You have received password reset email";

    if(@mail($login, $asunto, $mensaje, $headers,'-f'.$FromEmail) ){
        header("location:confirm.php?sent=1"); 
        $hide='1';
    }
}
?>