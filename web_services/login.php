<?php include('../config/connection.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>LATINFXSOUND*** - Login</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/tooplate-gymso-style.css">
</head>
<body>
    <div class="registrer bg-overlay modal-dialog-center" id="iniciarSesion" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="membershipFormLabel">Inicio de Sesion</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <form method="post" class="membership-form webform" role="form" action="">
                    <?php include('errors.php'); ?>
                    <div class="input-group">
                        <input type="email" class="form-control" name="user_email" placeholder="Direccion email">
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control" name="user_password" placeholder="Contraseña">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="form-control" id="login_user" name="login_user">Continuar</button>
                    </div>
                    <br><p>
                        Aun no te has registrado? <a href="web_services/register.php">Registrate ahora mismo</a>
                    </p>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</body>
</html>