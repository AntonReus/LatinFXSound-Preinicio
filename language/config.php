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
$user_id = "";

// connect to the database local -- Coment in case of work whit Ivan
$conn = mysqli_connect('localhost', 'root', '', 'latinfxsound-preinicio');

//***************Register */
if (isset($_POST['reg_user']) || isset($_POST['reg_admin'])) {
    // receive all input values from the form

    $email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['user_password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['user_password_2']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    $check_1 = mysqli_real_escape_string($conn, $_POST['signup-agree_1']);
    $check_2 = mysqli_real_escape_string($conn, $_POST['signup-agree_2']);

    // Check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['email'] === $email) {
        array_push($errors, "email already exists");
        }
    }
    $password_1 = md5($password_1);//encrypt the password before saving in the database

    // Register user if there are no errors in the form
    if (count($errors) == 0) {
        if (isset($_POST['reg_admin'])) {
            $user_type = "admin";
            $query = "INSERT INTO users (email, password, user_type) 
                    VALUES('$email', '$password_1', '$user_type')";
            mysqli_query($conn, $query);
            $_SESSION['success'] = "";
            //Href to biblioteca
            header("Location: ../biblioteca.php");
        }
        else if (isset($_POST['reg_user'])) {
            if ($check_1 && $check_2) {
                $user_type = "user";
                $query = "INSERT INTO users (email, password, user_type) 
                        VALUES('$email', '$password_1', '$user_type')";
                mysqli_query($conn, $query);
    
                // get id of the created user
                $logged_in_user_id = mysqli_insert_id($conn);
    
                $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
                $_SESSION['success']  = "You are now logged in";
                //Href to biblioteca
                header("Location: ../Paginas/biblioteca.php");
            }
            else
            {
                array_push($errors, "Acepte los Terminos y Condiciones y acepte tener mas de 18 años de edad");
            }
        }
    }
}

function getUserById($id){
	global $conn;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($conn, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

//***************Log in */
if(isset($_POST['login_user']))
{
    if (isset($_POST['login_user'])) {
        // receive all input values from the form

        $email = mysqli_real_escape_string($conn, $_POST['user_email']);
        $password = mysqli_real_escape_string($conn, $_POST['user_password']);
        
        if (empty($email)) {
            array_push($errors, "Ingrese su correo electronico");
        }
        if (empty($password)) {
            array_push($errors, "Ingrese su contraseña");
        }
        
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
            $results = mysqli_query($conn, $query);

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
/*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/
if (isset($_POST['send_recover'])) {
    $email = mysqli_real_escape_string($conn, $_POST['user_email']);
    // ensure that the user exists on our system
    $query = "SELECT email FROM users WHERE email='$email'";
    $results = mysqli_query($conn, $query);

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
        $results = mysqli_query($conn, $sql);

        // Send email to user with the token in a link they can click on
        $to = $email;
        $subject = "Reset your password on epicsoundfx.com";
        //$msg = "Hi there, click on this link to reset your password: http://localhost/LatinFXSound-Preinicio/password_recovery/new_pass.php?token=".$token;
        $msg = "Hola $email\nPara cambiar tu contraseña por favor accede al siguiente link:\nhttp://localhost/LatinFXSound-Preinicio/password_recovery/new_pass.php?token=$token\nSi no eres tu por favor ignora este mensaje.";
        $msg = wordwrap($msg,70);
        $headers = "From: tonitovlog@gmail.com";
        mail($to, $subject, $msg, $headers);
        header('location: ../pending.php?email=' . $email);
    }
}

// ENTER A NEW PASSWORD
if (isset($_POST['new_password'])) {
    $password_1 = mysqli_real_escape_string($conn, $_POST['user_password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['user_password_2']);
  
    // Grab to token that came from the email link
    $token = $_SESSION['token'];
    if (empty($password_1) || empty($password_2)) array_push($errors, "Password is required");
    if ($password_1 !== $password_2) array_push($errors, "Password do not match");
    if (count($errors) == 0) {
        // select email address of user from the password_reset table 
        $sql = "SELECT email FROM password_resets WHERE token='$token' LIMIT 1";
        $results = mysqli_query($conn, $sql);
        $email = mysqli_fetch_assoc($results)['email'];
    
        if ($email) {
            $password_1 = md5($password_1);
            $sql = "UPDATE users SET password='$password_1' WHERE email='$email'";
            $results = mysqli_query($conn, $sql);
            header('location: ../index.php');
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