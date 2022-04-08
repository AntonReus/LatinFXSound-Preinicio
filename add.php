<?php
include('conexion.php');// conexion a la bd
?>
<?php include ("config/config.php");?>

<html lang="es">
    <head>

     <title>Epic Sound FX</title>
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

    <!--//<link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/blog.css">-->

</head>
    <body>
        <header>
           <header>
     
    <!-- MENU BAR -->
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
            <div><a class="navbar-brand" href="index.php">Epic<!-- <img src="images/back/lo.png" width="150" height="115"> -->Sound</a></div>
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
                <a href="index.php?lang=es"><?php echo $lang['es']?></a>
                <a href="index.php?lang=en"><?php echo $lang['en']?></a>
            </li>
        </ul>
    </nav>

    <div id="icon-menu">
            <i class="fas fa-bars" style="white"></i>
        </div>

        <!--buscador----->

        <form action="AlbumCocina.php" method="POST" name="buscar">
            <div  id="ctn-bars-search">
                <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?" name="buscarC">
            </div>   
        </form>
         

        <ul id="box-search">
        
        
    </ul>

    <div id="cover-ctn-search"></div>  

</header>
        </header>


            <form method="POST" enctype="multipart/form-data" action="addsong.php" class="table Hero3 hero4" style="background: color:  #ffffff;">
                <table class="table Hero3" >
                <tr><th colspan="5" class="hero3 hero4 text-center" >NUEVO SONIDO</th></tr>
                <tr class="hero4">
                <th>NOMBRE</th>
                <th>DURACION</th>
                <th>BPM</th>
                <th>ALBUM</th>
                <th>SONIDO</th>
                </tr>
                <tr class="bg-info hero4">
                    <td><input name="nombre" type="text" class="form-control" placeholder="Nombre"></td>
                    <td><input name="duracion" type="text" class="form-control" placeholder="Duracion en min"></td>
                    <td><input name="bpm" type="text" class="form-control" placeholder="BPM"></td>
                    <td><input name="album" type="text" class="form-control" placeholder="Album al que pertenecera"></td>
                    <td><input name="sonido" type="file" class="form-control"></td>
                <td><input name="insertar" type="submit" class="btn btn-success" value="Insertar sonido" > </td>
                </tr>
                </table>
                <br>
                <br>
                
            </form>
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
