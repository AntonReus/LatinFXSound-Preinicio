<?php// include('../config/connection.php') ?>
<?php include"../language/config.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>LATINFXSOUND*** - <?php echo $lang['Reg1']?></title>

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

<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <div><a class="navbar-brand" href="../index.php">LATINFXSOUND***</a></div>
            <div><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button></div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll" id="Inicio"><?php echo $lang['Nav1']?></a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll" key="Acerca"><?php echo $lang['Nav2']?></a>
                    </li>

                    <li class="nav-item">
                        <a href="#sonidos" class="nav-link smoothScroll"><?php echo $lang['Nav3']?></a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll" data-toggle="modal" data-target="#iniciarSesion"><?php echo $lang['Nav4']?></a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll"><?php echo $lang['Nav5']?></a>
                    </li>
                </ul>
                <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
                <ul class="social-icon ml-lg-3">
                    <li>
                        <a href="registrer.php?lang=es"><?php echo $lang['es']?></a>
                        <a href="registrer.php?lang=en"><?php echo $lang['en']?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="registrer bg-overlay modal-dialog-center" role="document">
        <div class="modal-content modal-dialog">
            <div class="modal-header" ass="modal-title" id="membershipFormLabel"><h2><?php echo $lang['Reg2']?></h2>
                <a type="button" class="close" data-dismiss="modal" aria-label="Close" href="../index.php">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form class="registrer_form" id="registrer_form" role="form" method="post" action="">
                    <?php include('errors.php'); ?>
                    <div class="input-group">
                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="<?php echo $lang['Reg3']?>">
                        <span id="email_error"></span>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control" id="user_password_1" name="user_password_1" placeholder="<?php echo $lang['Reg4']?>">
                        <span id="password_error" class="ch_error"></span>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control" id="user_password_2" name="user_password_2" placeholder="<?php echo $lang['Reg5']?>">
                        <span id="password_error" class="ch_error"></span>
                    </div>
                    <p><div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="signup-agree_1" name="signup-agree_1">
                        <label class="custom-control-label text-small text-muted" for="signup-agree_1"><?php echo $lang['Reg6']?> <a href="#"><?php echo $lang['Reg7']?></a>
                        </label>
                    </div>
                    <p><div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="signup-agree_2" name="signup-agree_2">
                        <label class="custom-control-label text-small text-muted" for="signup-agree_2"><?php echo $lang['Reg8']?></label>
                    </div>
                    <div class="input-group">
                        <button type="submit" class="form-control" name="reg_user" href="index.php"><?php echo $lang['Reg1']?></button>
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