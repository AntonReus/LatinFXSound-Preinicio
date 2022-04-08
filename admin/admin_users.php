<?php 
include ("../config/config.php");
//include ("../conexion/db.php");
if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>admin | Epic Sound FX</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/aos.css">
     <link rel="stylesheet" href="../css/bibliotecas.css">

    <!--Multilanguage-->

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../css/tooplate-gymso-style.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/principal.css">
    <link rel="stylesheet" href="../css/blog.css">
</head>

<header>
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <div><a class="navbar-brand" href="../index.php">Epic Sound FX --admin</a></div>
            <div><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button></div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link smoothScroll" id="Inicio"><?php echo $lang['Nav1']?></a>
                    </li>
                    <li class="nav-item">
                        <a href="../Paginas/biblioteca.php" class="nav-link smoothScroll"><?php echo $lang['Nav3']?></a>
                    </li>
                    <li class="nav-item">
                        <?php  if (isset($_SESSION['user'])) : ?>
                            <a href="../index.php?logout='1'" style="color:;" class="nav-link smoothScroll" id="CerrarSesion">Cerrar Sesión</a>
                        <?php endif ?>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="social-icon ml-lg-3">
            <li>
                <a href="admin_users.php?lang=es"><?php echo $lang['es']?></a>
                <a href="admin_users.php?lang=en"><?php echo $lang['en']?></a>
            </li>
        </ul>
    </nav>
</header>
<body>
    <section class="forms d-flex flex-column justify-content-center align-items-center">
        <div class="bg-overlay"></div>
        <div class="modal-content modal-dialog">
            <div class="modal-header" ass="modal-title" id="membershipFormLabel"><h2><?php echo $lang['Reg2']?></h2>
                <a type="button" class="close" data-dismiss="modal" aria-label="Close" href="../index.php">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form class="registrer_form" id="registrer_form" role="form" method="post" action="">
                    <?php include('../web_services/errors.php'); ?>
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
                    <div class="input-group">
                        <button type="submit" class="form-control" name="reg_admin" id="reg_admin" href="index.php"><?php echo $lang['Reg1']?></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

    <div class="content">
    </div>

    <!-- SCRIPTS -->
    <script src="../js/jquery.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/aos.js"></script>
     <script src="../js/smoothscroll.js"></script>
     <script src="../js/custom.js"></script>
     <script src="../js/own.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="../js/jquery-3.6.0.min.js"></script>
     <script src="../js/script.js"></script>
</body>
</html>