<?php
 require_once("config/configdb.php");
if(isset($_POST['subforgot'])){ 
$login=$_REQUEST['login_var'];
$query = "select * from  users where (email = '$login')";
$res = mysqli_query($conn,$query);
$result=mysqli_fetch_array($res);
if($result)
{
$findresult = mysqli_query($conn, "SELECT * FROM users WHERE (email = '$login')");
if($res = mysqli_fetch_array($findresult))
{
$oldftemail = $res['email'];  
}
$token = bin2hex(random_bytes(50));
 $inresult = mysqli_query($conn,"insert into pass_reset values('','$oldftemail','$token')"); 
 if ($inresult)  
 {
$FromName="Epic Sound FX";
$FromEmail="no_reply@technosmarter.com";
$ReplyTo="technosmarterinfo@gmail.com";
$credits="<img style='display:block;margin-left: auto; margin-right: auto;' width='175' height='150' src='https://lh3.googleusercontent.com/pw/AM-JKLXe9J_txeiFw0MwWltm76Y8cK3pDPGGgpsecijTzxQWk9cOJ6wNNzMnV-ID15bDANfm9ILCA6adFM_0PAAbNlKROdsm2PNZ3jnYjcI8x5N3rog1TbUtzQKToDJkSUjqOVYhWyPxJk0pdkIrBl_urhyYCw=w539-h462-no?authuser=0'/><br>All rights are reserved | Epic Sound FX"; 
$headers  = "MIME-Version: 1.0\n";
     $headers .= "Content-type: text/html; charset=iso-8859-1\n";
     $headers .= "From: ".$FromName." <".$FromEmail.">\n";
      $headers .= "Reply-To: ".$ReplyTo."\n";
      $headers .= "X-Sender: <".$FromEmail.">\n";
       $headers .= "X-Mailer: PHP\n"; 
       $headers .= "X-Priority: 1\n"; 
       $headers .= "Return-Path: <".$FromEmail.">\n"; 
         $subject="Restauración de contraseña"; 
     $msg="Hola ".$oldftemail."<br><br>Para cambiar tu contraseña por favor accede al siguiente link:<br> http://localhost/LatinFXSound-Preinicio/password-reset.php?token=".$token." <br><br> si no eres tu por favor ignora este mensaje.<br><br> <br><center>".$credits."</center>"; 
   if(@mail($oldftemail, $subject, $msg, $headers,'-f'.$FromEmail) ){
header("location:forgot-password.php?sent=1"); 
$hide='1';
          
    } else {
        
    header("location:forgot-password.php?servererr=1"); 
} 
      } 
      else 
      { 
          header("location:forgot-password.php?something_wrong=1"); 
      }     
}
else  
{
header("location:forgot-password.php?err=".$login); 
}
}
?>