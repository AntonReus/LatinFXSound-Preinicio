<?php
session_start();

$dbHost = 'localhost';
$dbName = 'tutorials';
$dbUsername = 'root';
$dbPassword = '';
$conn= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['subforgot'])){
$login=$_REQUEST['login_var'];
$query = "select * from  users where (username='$login' OR email = '$login')"; 
$res = mysqli_query($conn,$query);
$result=mysqli_fetch_array($res);
if($result)
{
$findresult = mysqli_query($conn, "SELECT * FROM users WHERE (username='$login' OR email = '$login')");
if($res = mysqli_fetch_array($findresult))
{
$oldftemail = $res['email'];  
}
$token = bin2hex(random_bytes(50));
 $inresult = mysqli_query($conn,"insert into pass_reset values('','$oldftemail','$token')"); 
 if ($inresult)  
 { 
$FromName="Techno Smarter";
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
     $msg="Your password reset link <br> http://localhost/LatinFXSound-Preinicio/password_recovery/password-reset.php?token=".$token." <br> Reset your password with this link .Click or open in new tab<br><br> <br> <br> <center>".$credits."</center>"; 
   if(@mail($oldftemail, $subject, $msg, $headers,'-f'.$FromEmail) ){
header("location:../pending.php?sent=1"); 
$hide='1';
          
    } else {
        
    header("location:../pending.php?servererr=1"); 
} 
      } 
      else 
      { 
          header("location:../pending.php?something_wrong=1"); 
      }     
}
else  
{
header("location:../pending.php?err=".$login); 
}
}
?>