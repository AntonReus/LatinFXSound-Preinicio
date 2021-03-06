<?php include('email_process.php');
$errors = array();
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
?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title><?php echo $lang['Slogan']?></title>
     <link rel="icon" type="image/x-icon" href="favicon.ico">

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/bibliotecas.css">

    <!--Multilanguage-->

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/blog.css">

</head>    
  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="row">
                <div class="col text-center">
                    <label id="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        <div class="container">
            <div><a class="navbar-brand" href="index.php">Epic Sound FX</a></div>
            <div><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button></div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link smoothScroll" id="Inicio"><b><?php echo $lang['Nav1']?></b></a>
                    </li>

                    <li class="nav-item">
                        <a href="biblioteca.php" class="nav-link smoothScroll"><b><?php echo $lang['Nav3']?></b></a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll" data-toggle="modal" data-target="#iniciarSesion"><b><?php echo $lang['Nav4']?></b></a>
                    </li>
                </ul>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    
                </ul>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="ctn-icon-search">
                    <a href="#sonidos" class="fas fa-search hero3" id="icon-search"></a>
                </div>
        </div>
         <ul class="social-icon ml-lg-3">
            <li>
                <a href="Contacto.php?lang=es"><?php echo $lang['es']?></a>
                <a href="Contacto.php?lang=en"><?php echo $lang['en']?></a>
            </li>
        </ul>
    </nav>
    <div id="icon-menu">
            <i class="fas fa-bars" style="white"></i>
        </div>
         <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="??Qu?? deseas buscar?">
    </div>
        <ul id="box-search">
        <li>
            <audio controls>
                <source src="audios/huevo.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
            </audio>
            <a href="audios/huevo.mp3">
                <i class="fas fa-search"></i><?php echo $lang['huevo']?>
            </a>
        </li>
         <li>
            <audio controls>
                <source src="audios/huevo.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
            </audio>
            <a href="audios/pajaros.mp3">
                <i class="fas fa-search"></i><?php echo $lang['pajaros']?>
            </a>
        </li>
         <li>
            <audio controls>
                <source src="audios/trailer.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
            </audio>
            <a href="audios/trailer.mp3">
                <i class="fas fa-search"></i><?php echo $lang['trailer']?>
            </a>
        </li>
         <li>
            <audio controls>
                <source src="audios/acelerar.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
            </audio>
            <a href="audios/acelerar.mp3">
                <i class="fas fa-search"></i><?php echo $lang['acelerar']?>
            </a>
        </li>
        <li>
            <a href="AlbumCocina.php">
                <i class="fas fa-search"></i><?php echo $lang['AC']?>
            </a>
        </li>
    </ul>
    <div id="cover-ctn-search"></div>  
</header>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- CONTACT -->
    <section class="hero d-flex flex-column justify-content-center align-items-center">
        <div class="bg-overlay"></div>
            <div class="row">
                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4 pb-2 hero3" data-aos="fade-up" data-aos-delay="200"><?php echo $lang['Cont1']?></h2>
                    <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                        <div class="input-group">
                            <input type="email" name="login_var" value="<?php if(!empty($err)){ echo  $err; } ?>" class="form-control" required="" placeholder="<?php echo $lang['InSes2']?>">
                        </div>
                        <div class="input-group">
                            <input type="text" name="asunto_var" value="<?php if(!empty($err)){ echo  $err; } ?>" class="form-control" required="" placeholder="<?php echo $lang['Cont3']?>">
                        </div>
                        <div class="input-group">
                            <input type="text" name="mensaje_var" value="<?php if(!empty($err)){ echo  $err; } ?>" class="form-control" required="" placeholder="<?php echo $lang['Cont4']?>">
                        </div>
                        <div class="input-group">
                            <button type="submit" class="form-control hero3" id="submit-button" name="send_email"><b></b></h1><?php echo $lang['Cont5']?></h1></b></b></button>
                        </div>
                    </form>
                </div>
                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4 hero3" data-aos="fade-up" data-aos-delay="600">A sus ordenes</span></h2>
                    <p class="mb-4 hero3"><b>Cualquier queja o sugerencia sera atendida, asi como agradecemos que de no encontrar el sonido que busca nos lo haga saber para agregarlo a nuestras librerias</b></p>
                </div>
            </div>
    </section>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/own.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/script.js"></script>
     <script src="js/mode.js"></script>
</body>
</html>