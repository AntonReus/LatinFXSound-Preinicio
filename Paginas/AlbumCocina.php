<?php// include('../config/connection.php') ?>
<?php include"../language/config.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>LATINFXSOUND*** - <?php echo $lang['Sound3']?></title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/aos.css">
     
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
            </div>
            <div class="ctn-icon-search">
                        <a href="#" class="fas fa-search" id="icon-search"></a>
                    </div>
        </div>
        <ul class="social-icon ml-lg-3">
                    <li>
                        <a href="registrer.php?lang=es"><?php echo $lang['es']?></a>
                        <a href="registrer.php?lang=en"><?php echo $lang['en']?></a>
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
                <source src="../audios/huevo.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
            </audio>
            <a href="../audios/huevo.mp3">
                <i class="fas fa-search"></i><?php echo $lang['huevo']?>
            </a>
        </li>

         <li>
            <audio controls>
                <source src="../audios/huevo.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
            </audio>
            <a href="../audios/pajaros.mp3">
                <i class="fas fa-search"></i><?php echo $lang['pajaros']?>
            </a>
        </li>

         <li>
            <audio controls>
                <source src="../audios/trailer.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
            </audio>
            <a href="../audios/trailer.mp3">
                <i class="fas fa-search"></i><?php echo $lang['trailer']?>
            </a>
        </li>

         <li>
            <audio controls>
                <source src="../audios/acelerar.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
            </audio>
            <a href="../audios/acelerar.mp3">
                <i class="fas fa-search"></i><?php echo $lang['acelerar']?>
            </a>
        </li>

        
    </ul>

    <div id="cover-ctn-search"></div>  

</header>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">



    <section class="registrer bg-overlay modal-dialog-center" role="document">

        <div class="modal-content modal-dialog">
            <div class="modal-header" ass="modal-title" id="membershipFormLabel"><h2><?php echo $lang['Sound3']?></h2>
                
<img src="../images/class/cocinando.jpeg" width="250">

            </div>
              

        
            
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
     <div class="modal-body">
                <li>
                    <a href="../audios/huevo.mp3">
                        <i class="stylesheet"></i><?php echo $lang['AC1']?>
                    </a>
                    <br>
                    <img src="../images/AlbumCocina/huevo.jpg" class="img-fluid" alt="Class" width="130" height="1000" sizes="10">
                    
                    <audio controls>
                        <source src="../audios/AlbumCocina/huevo.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
                    </audio>
                </li>
            </div>

            <div class="modal-body">
                <li>
                    <a href="../audios/AlbumCocina/freir.mp3">
                        <i class="stylesheet"></i><?php echo $lang['AC2']?>
                    </a>
                    <br>
                    <img src="../images/AlbumCocina/freir.jpeg" class="img-fluid" alt="Class" width="130" height="1000" sizes="10">

                    <audio controls>
                        <source src="../audios/AlbumCocina/freir.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
                    </audio>
                </li>
            </div>
            
            <div class="modal-body">
                <li>
                    <a href="../audios/AlbumCocina/batir.mp3">
                        <i class="stylesheet"></i><?php echo $lang['AC3']?>
                    </a>
                    <br>
                    <img src="../images/AlbumCocina/batir.jpeg" class="img-fluid" alt="Class" width="130" height="1000" sizes="10">

                    <audio controls>
                        <source src="../audios/AlbumCocina/batir.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
                    </audio>
                </li>
            </div>

            <div class="modal-body">
                <li>
                    <a href="../audios/AlbumCocina/burbujas.mp3">
                        <i class="stylesheet"></i><?php echo $lang['AC4']?>
                    </a>
                    <br>
                    <img src="../images/AlbumCocina/hervir.jpeg" class="img-fluid" alt="Class" width="130" height="1000" sizes="10">

                    <audio controls>
                        <source src="../audios/AlbumCocina/burbujas.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
                    </audio>
                </li>
            </div>

            <div class="modal-body">
                <li>
                    <a href="../audios/AlbumCocina/microondas.mp3">
                        <i class="stylesheet"></i><?php echo $lang['AC5']?>
                    </a>
                    <br>
                    <img src="../images/AlbumCocina/microondas.jpeg" class="img-fluid" alt="Class" width="130" height="1000" sizes="10">

                    <audio controls>
                        <source src="../audios/AlbumCocina/microondas.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
                    </audio>
                </li>
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