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
     <link rel="stylesheet" href="../css/bibliotecas.css">
     <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/principal.css">
    <link rel="stylesheet" href="../css/blog.css">

</head>    
    <header>
    
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <div><a class="navbar-brand" href="../index.php">Epic Sound FX</a></div>
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
                        <a href="../Paginas/biblioteca.php" class="nav-link smoothScroll"><?php echo $lang['Nav3']?></a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll" data-toggle="modal" data-target="#iniciarSesion"><?php echo $lang['Nav4']?></a>
                    </li>
                </ul>
                --------------
                <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    
                </ul>
                ------------
                </div>
                <div class="ctn-icon-search">
                    <a href="#sonidos" class="fas fa-search" id="icon-search"></a>
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
            <a href="../audios/huevo.mp3">
                <i class="fas fa-search"></i><?php echo $lang['huevo']?>
            </a>
        </li>

         <li>
            <audio controls>
                <source src="audios/huevo.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
            </audio>
            <a href="../audios/pajaros.mp3">
                <i class="fas fa-search"></i><?php echo $lang['pajaros']?>
            </a>
        </li>

         <li>
            <audio controls>
                <source src="audios/trailer.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
            </audio>
            <a href="../audios/trailer.mp3">
                <i class="fas fa-search"></i><?php echo $lang['trailer']?>
            </a>
        </li>

         <li>
            <audio controls>
                <source src="audios/acelerar.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
            </audio>
            <a href="../audios/acelerar.mp3">
                <i class="fas fa-search"></i><?php echo $lang['acelerar']?>
            </a>
        </li>

        
    </ul>

    <div id="cover-ctn-search"></div>  

</header>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

<!-- CLASS -->

    <section class="registrer bg-overlay modal-dialog-center" role="document">

   
    </form>     
        <section class="schedule section" id="schedule">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-left">
                               
                                    
                                <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Album Cocina</h2>
                                 <h6 data-aos="fade-up">
                                     Nuestro catalgo contiene un sin fin de sonidos de cocina libre de derechos
                                </h6>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table"  data-aos-delay="300">

                                     <thead class="thead-light">
                                         
                                         <th>Sonido</th>
                                         <th>Nombre</th>
                                         <th>Duracion</th>
                                         <th>BPM</th>
                                         <th>Favoritos</th>
                                         <th></th>
                                     </thead>

                                     <tbody>
                                         <tr>
                                            <td>
                                                <small>
                                                    <audio controls>
                                                        <source src="../audios/AlbumCocina/huevo.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
                                                    </audio>
                                                </small>
                                            </td>
                                           
                                                <th><strong style="color: white;">Cascara de huevo</strong></th>
                                                <th><strong style="color: white;">0:13 s</strong></th>
                                                <th><strong style="color: white;">190 BPM</strong></th>
                                                <th><strong style="color: white;" class="text-rigth"><i class="fa-solid fa-heart"></i></strong></th>
                                                  
                                         </tr>

                                         <tr>
                                            <td>
                                                <small>
                                                    <audio controls>
                                                        <source src="../audios/AlbumCocina/burbujas.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
                                                    </audio>
                                                </small>
                                            </td>
                                           
                                                <th><strong style="color: white;">Hervir</strong></th>
                                                <th><strong style="color: white;">0:09 s</strong></th>
                                                <th><strong style="color: white;">147 BPM</strong></th>
                                                <th><strong style="color: white;" class="text-rigth"><i class="fa-solid fa-heart"></i></strong></th>
                                                  
                                         </tr>

                                         <tr>
                                            <td>
                                                <small>
                                                    <audio controls>
                                                        <source src="../audios/AlbumCocina/freir.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
                                                    </audio>
                                                </small>
                                            </td>
                                           
                                                <th><strong style="color: white;">Freir</strong></th>
                                                <th><strong style="color: white;">0:31 s</strong></th>
                                                <th><strong style="color: white;">152 BPM</strong></th>
                                                <th><strong style="color: white;" class="text-rigth"><i class="fa-solid fa-heart"></i></strong></th>
                                                  
                                         </tr>
                                         <tr>
                                            <td>
                                                <small>
                                                    <audio controls>
                                                        <source src="../audios/AlbumCocina/batir.mp3" type="audio/mp3"><?php echo $lang['Hero6']?>
                                                    </audio>
                                                </small>
                                            </td>
                                           
                                                <th><strong style="color: white;">Batir</strong></th>
                                                <th><strong style="color: white;">0:03 s</strong></th>
                                                <th><strong style="color: white;">120 BPM</strong></th>
                                                <th><strong style="color: white;" class="text-rigth"><i class="fa-solid fa-heart"></i></strong></th>
                                                  
                                         </tr>

                                     </tbody>
                                 </table>
                             </div>

                    </div>
               </div>

               <!-- FOOTER -->
                 <footer class="col-lg-12 py-5 col-md-12 col-12" >
                     <div class="container" style="color: white;">
                         <div class="row">
                             <div class="container">
                                 <div class="row">
                                     <a href="../Paginas/Contacto.php" class="btn custom-btn bg-color mt-3 nav-link smoothScroll"  data-aos-delay="300" data-toggle="modal" >Sugerencias</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </footer>
        </section>

  

     

                

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