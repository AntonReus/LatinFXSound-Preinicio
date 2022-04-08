<?php
include('config/config.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
 /**  conexion a la bd*/
/**$listPer=$conexion->query("SELECT * FROM personajes ORDER BY id_personaje");// lista los registros de la tabla*/

if(isset($_POST['insert']))//si apretamos el boton..
{
    $nombre=$_POST['nombre_sonido'];
    $cargarSonido=($_FILES['sonido']['tmp_name']);//carga el archivo
    $son=fopen($cargarSonido, 'rb');//leer el archivo como binario
    $dur=$_POST['duracion'];
    $bits=$_POST['BPM'];
    $alb=$_POST['album'];

    $insertarPJ=$conexion->prepare("INSERT INTO canciones (nombre, sonido, duracion, bpm, album) VALUES (:nombre, :sound, :dura, :b, :al)");
    $insertarPJ->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $insertarPJ->bindParam(':sound', $son, PDO::PARAM_LOB);
    $insertarPJ->bindParam(':dura', $dur, PDO::PARAM_STR);
    $insertarPJ->bindParam(':b', $bits, PDO::PARAM_STR);
    $insertarPJ->bindParam(':al', $alb, PDO::PARAM_STR);
    $insertarPJ->execute();

    if($insertarPJ)//si la query se ejecuta con exito lanza el mensaje:
    {
        
        $mensaje="<div class='col-md-offset-4 col-md-4 alert alert-success text-center'>
        ¡PERSONAJE AÑADIDO EXITOSAMENTE! <a href='index.php'>VER AQUÍ</a></div>";
    }

    else
    //pero si no se ejecuta correctamente, lanza el mensaje:
    {
        $mensaje="<div class='col-md-offset-4 col-md-4 alert alert-danger text-center'>
        ¡EL PERSONAJE NO PUDO AGREGARSE!</div>";
    }
}
?>
<?php //include ("config/config.php");?>

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
     
     <!--Multilanguage-->

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
     <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/blog.css">

</head>    
<body data-spy="scroll" data-target="#navbarNav" data-offset="50" class="">
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
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <a href="biblioteca.php" class="nav-link smoothScroll"><b><?php echo $lang['Nav3']?></b></a>
                    </li>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <?php  if (isset($_SESSION['user'])) : ?>
                            <a href="index.php?logout='1'" style="color:;" class="nav-link smoothScroll" id="CerrarSesion"><b><?php echo $lang['Nav7']?></b></a>
                        <?php endif ?>
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
                <a href="index.php?lang=es"><?php echo $lang['es']?></a>
                <a href="index.php?lang=en"><?php echo $lang['en']?></a>
            </li>
        </ul>
    </nav>

    <div id="icon-menu">
            <i class="fas fa-bars" style="white"></i>
        </div>

         <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
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
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>


    <section class="forms d-flex flex-column justify-content-center align-items-center">
        <div class="bg-overlay"></div>
        <div class="modal-content modal-dialog">
            <div class="modal-header" ass="modal-title" id="membershipFormLabel"><h2>Añadir nuevo sonido</h2>
                <a type="button" class="close" data-dismiss="modal" aria-label="Close" href="index.php">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form class="registrer_form" id="add_sound" role="form" method="post" action="">
                    <?php include('errors.php'); ?>
                    <div class="input-group">
                        <input type="tex" class="form-control" id="nombre_sonido" name="nombre_sonido" placeholder="Nombre del sonido">
                        
                    </div>

                    <div class="input-group">
                        <input type="text" class="form-control" id="duracion" name="duracion" placeholder="Duracion">
                       
                    </div>

                    <div class="input-group">
                        <input type="text" class="form-control" id="BPM" name="BPM" placeholder="BPM">
                       
                    </div>

                    <div class="input-group">
                        <input type="text" class="form-control" id="album" name="album" placeholder="A que album pertenece">
                        
                    </div>

                    <div class="input-group">
                        <input type="file" class="form-control" id="sonido" name="sonido" placeholder="Sonido">
                    </div>
                    
                   

                    <div class="input-group">
                        <button type="submit" class="form-control" name="insert" href="index.php">Añadir sonido</button>
                    </div>
                </form>
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