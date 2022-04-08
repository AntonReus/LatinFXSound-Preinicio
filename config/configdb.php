<?php
session_start();

$email    = "";
$password_1 = "";
$password_2 = "";
$token = "";
$errors = array();
$check_1 = array();
$check_2 = array();
$password = "";
$user_id = "";

$dbHost = 'localhost';
$dbName = 'latinfxsound-preinicio';
$dbUsername = 'root';
$dbPassword = '';
$conn= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

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
            $options = array("cost"=>4);
            $password = password_hash($password,PASSWORD_BCRYPT,$options);
            $query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
            $results = mysqli_query($conn, $query);

            if (mysqli_num_rows($results) == 1) {
                $logged_in_user = mysqli_fetch_assoc($results);
                if ($logged_in_user['user_type'] == 'mod')
                {
                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success']  = "You are now logged in";
                    //Falta direccionar a biblioteca o a algo
                    header('location: admin_users.php');
                }
                else if ($logged_in_user['user_type'] == 'admin')
                {
                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success']  = "You are now logged in";
                    //Falta direccionar a biblioteca o a algo
                    header('location: biblioteca.php');
                }
                else if ($logged_in_user['user_type'] == 'user')
                {
                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success']  = "You are now logged in";
                    //Falta direccionar a biblioteca o a algo
                    header('location: biblioteca.php');
                }
            }else {
                array_push($errors, "La contraseña y el correo no coincide. Vuelva a intentar.");
            }
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

//Log out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>