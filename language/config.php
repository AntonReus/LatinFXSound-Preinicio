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
$errors = array();
$check_1 = array();
$check_2 = array();
$password = "";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'latinfxsound-preinicio');

//Function calls
if(isset($_POST['reg_user']))
{
    register();
}

if(isset($_POST['login_user']))
{
    logIn();
}

if(isset($_POST['send_recover']))
{
    recover();
}

if(isset($_POST['new_password']))
{
    newPassword();
}

//***************Register */
function register()
{
    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        global $db, $errors, $email, $password_1, $password_2;

        $email = mysqli_real_escape_string($db, $_POST['user_email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['user_password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['user_password_2']);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        $check_1 = mysqli_real_escape_string($db, $_POST['signup-agree_1']);
        $check_2 = mysqli_real_escape_string($db, $_POST['signup-agree_2']);

        if ($check_1 && $check_2)
        { 
            // Check the database to make sure 
            // a user does not already exist with the same username and/or email
            $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
            $result = mysqli_query($db, $user_check_query);
            $user = mysqli_fetch_assoc($result);
            
            if ($user) { // if user exists
                if ($user['email'] === $email) {
                array_push($errors, "email already exists");
                }
            }
            $password_1 = md5($password_1);//encrypt the password before saving in the database

            // Register user if there are no errors in the form
            if (count($errors) == 0) {
                if (isset($_POST['user_type'])) {
                    $user_type = "admin";
                    $query = "INSERT INTO users (email, password, user_type) 
                            VALUES('$email', '$password_1', '$user_type')";
                    mysqli_query($db, $query);
                    $_SESSION['success'] = "";
                    //Href to biblioteca
                    header("Location: ../biblioteca.php");
                }
                else {
                    $user_type = "user";
                    $query = "INSERT INTO users (email, password, user_type) 
                            VALUES('$email', '$password_1', '$user_type')";
                    mysqli_query($db, $query);

                    // get id of the created user
                    $logged_in_user_id = mysqli_insert_id($db);

                    $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
                    $_SESSION['success']  = "You are now logged in";
                    //Href to biblioteca
                    header("Location: ../biblioteca.php");
                }
            }
        }
        else
        {
            array_push($errors, "Acepte los Terminos y Condiciones y acepte tener mas de 18 años de edad");
        }
    }
}

function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

//***************Log in */
function login(){
    if (isset($_POST['login_user'])) {
        // receive all input values from the form
        global $db, $password, $email, $errors;

        $email = mysqli_real_escape_string($db, $_POST['user_email']);
        $password = mysqli_real_escape_string($db, $_POST['user_password']);
        
        if (empty($email)) {
            array_push($errors, "Ingrese su correo electronico");
        }
        if (empty($password)) {
            array_push($errors, "Ingrese su contraseña");
        }
        
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
            $results = mysqli_query($db, $query);

            if (mysqli_num_rows($results) == 1) {
                $logged_in_user = mysqli_fetch_assoc($results);
                if ($logged_in_user['user_type'] == 'admin')
                {
                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success']  = "You are now logged in";
                    //Falta direccionar a biblioteca o a algo
                    header('location: Paginas/biblioteca.php');
                }
                else if ($logged_in_user['user_type'] == 'user')
                {
                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success']  = "You are now logged in";
                    //Falta direccionar a biblioteca o a algo
                    header('location: Paginas/biblioteca.php');
                }
            }else {
                array_push($errors, "La contraseña y el correo no coincide. Vuelva a intentar.");
            }
        }
    }
}

function recover()
{
    global $email;
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
        $sql = "INSERT INTO password_reset(email, token) VALUES ('$email', '$token')";
        $results = mysqli_query($db, $sql);

        // Send email to user with the token in a link they can click on
        $to = $email;
        $subject = "Reset your password on epicsoundfx.com";
        $msg = "Hi there, click on this <a href=\"new_password.php?token=" . $token . "\">link</a> to reset your password on our site";
        $msg = wordwrap($msg,70);
        $headers = "From: epicsoundfx.com";
        mail($to, $subject, $msg, $headers);
        header('location: pending.php?email=' . $email);
    }
}

function newPassword()
{
    $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
    $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);

    // Grab to token that came from the email link
    $token = $_SESSION['token'];
    if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
    if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
    if (count($errors) == 0) {
        // select email address of user from the password_reset table 
        $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
        $results = mysqli_query($db, $sql);
        $email = mysqli_fetch_assoc($results)['email'];

        if ($email) {
            $new_pass = md5($new_pass);
            $sql = "UPDATE users SET password='$new_pass' WHERE email='$email'";
            $results = mysqli_query($db, $sql);
            header('location: index.php');
        }
    }
}

//Funciones y analisis de datos o sesiones
//"user" or "admin"
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
function isLoggedAdmin()
{
    if($logged_in_user['user_type'] == 'admin') {
		return true;
	}else{
		return false;
	}
}
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

//Log out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>