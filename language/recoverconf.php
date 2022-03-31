<?php
    session_start();
if (!isset($_SESSION['lang']))
	$_SESSION['lang'] = "es";
else if (isset($_GET['lang'])        && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
{
	if ($_GET['lang'] == "es")
		$_SESSION['lang'] = "es";
	else if ($_GET['lang']  == "en")
        $_SESSION['lang'] = "en";
        else if ($_GET['lang']  == "it")
		$_SESSION['lang'] = "it";
}
require_once $_SESSION['lang'] . ".php";

// initializing variables
$email    = "";
$password_1 = "";
$password_2 = "";
$token = "";
$errors = array();
$check_1 = array();
$check_2 = array();
$password = "";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'latinfxsound-preinicio');

if (isset($_POST['send_recover'])) {
    $email = mysqli_real_escape_string($db, $_POST['user_email']);
    // ensure that the user exists on our system
    $query = "SELECT email FROM users WHERE email='$email'";
    $results = mysqli_query($db, $query);

    if (empty($email)) {
        array_push($errors, "Your email is required");
    }
    else if(mysqli_num_rows($results) <= 0)
    {
        array_push($errors, "Sorry, no user exists on our system with that email");
    }
    // generate a unique random token of length 100
    $token = bin2hex(random_bytes(50));

    if (count($errors) == 0)
    {
        // store token in the password-reset database table against the user's email
        $sql = "INSERT INTO password_resets(email, token) VALUES ('$email', '$token')";
        $results = mysqli_query($db, $sql);

        // Send email to user with the token in a link they can click on
        $to = $email;
        $subject = "Reset your password on epicsoundfx.com";
        $msg = "Hi there, click on this link to reset your password: http://localhost/LatinFXSound-Preinicio/password_recovery/new_pass.php?token=$token";
        $msg = wordwrap($msg,70);
        $headers = "From: tonitovlog@gmail.com";
        mail($to, $subject, $msg, $headers);
        header('location: ../pending.php?email=' . $email);
    }
}
if (isset($_POST['new_password'])) {
    $password_1 = mysqli_real_escape_string($db, $_POST['user_password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['user_password_2']);
    
    //$token = mysqli_real_escape_string($db, $_SESSION['token']);

    // Grab to token that came from the email link
    $token = $_GET['token'];
    if (empty($password_1) || empty($password_2)) array_push($errors, "Password is required");
    if ($password_1 !== $password_2) array_push($errors, "Password do not match");
    if (count($errors) == 0) {
        // select email address of user from the password_reset table 
        $sql = "SELECT email FROM password_resets WHERE token='$token' LIMIT 1";
        $results = mysqli_query($db, $sql);
        $email = mysqli_fetch_assoc($results)['email'];

        if ($email) {
            $password_1 = md5($password_1);
            $sql = "UPDATE users SET password='$password_1' WHERE email='$email'";
            $results = mysqli_query($db, $sql);
            header('location: index.php');
        }
    }
}
?>