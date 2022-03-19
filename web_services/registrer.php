<?php include('../config/connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>LATINFXSOUND*** - Registro</title>

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
    <section class="registrer bg-overlay modal-dialog-center" role="document">
        <div class="modal-content modal-dialog">
            <div class="modal-header" ass="modal-title" id="membershipFormLabel"><h2>Crear nueva cuenta</h2></div>
            <div class="modal-body">
                <form class="registrer_form" id="registrer_form" role="form" method="post" action="">
                    <?php include('errors.php'); ?>
                    <div class="input-group">
                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Direccion email">
                        <span id="email_error"></span>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control" id="user_password_1" name="user_password_1" placeholder="Contraseña">
                        <span id="password_error" class="ch_error"></span>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control" id="user_password_2" name="user_password_2" placeholder="Vuelva a escribir su contraseña">
                        <span id="password_error" class="ch_error"></span>
                    </div>
                    <p><div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="signup-agree">
                        <label class="custom-control-label text-small text-muted" for="signup-agree">Acepto los <a href="#">Terms &amp;Conditions</a>
                        </label>
                    </div>
                    <p><div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="signup-agree2">
                        <label class="custom-control-label text-small text-muted" for="signup-agree2">Tengo mas de 18 años</label>
                    </div>
                    <div class="input-group">
                        <button type="submit" class="form-control" name="reg_user" href="../index.php">Registrate</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- SCRIPTS -->
    <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/aos.js"></script>
        <script src="../js/smoothscroll.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../js/own.js"></script>
</body>
</html>