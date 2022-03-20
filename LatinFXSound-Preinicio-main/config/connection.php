<?php
session_start();

//***************Registro */

// initializing variables
$email    = "";
$password_1 = "";
$password_2 = "";
$errors = array();
$check_1 = array();
$check_2 = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'latinfxsound-preinicio');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
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
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['email'] === $email) {
        array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password_1 = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO users (email, password) 
                VALUES('$email', '$password_1')";
        mysqli_query($db, $query);
        $_SESSION['success'] = "You are now logged in";
        //Direccionar a pagina principal o biblioteca de musica
        header("Location: ../biblioteca.php");
    }
  }
  else
  {
    array_push($errors, "Acepte los Terminos y Condiciones y acepte tener mas de 18 años de edad");
  }
}

//***************Registro */

if (isset($_POST['login_user'])) {
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
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['user_email'] = $email;
            $_SESSION['success'] = "Inicio de sesion exitoso";
            //direccionar a pagina principal o biblioteca de musica
            header('location: biblioteca.php');
            header('location: index.php');
        }else {
            array_push($errors, "La contraseña y el correo no coincide. Vuelva a intentar.");
        }
    }
} 
?>