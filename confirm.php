<?php include ("config/config.php");?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
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
<header>
    
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <div><a class="navbar-brand" href="index.php">Epic Sound FX</a></div>
            <div><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button></div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link smoothScroll" id="Inicio"><?php echo $lang['Nav1']?></a>
                    </li>
                    <li class="nav-item">
                        <a href="biblioteca.php" class="nav-link smoothScroll"><?php echo $lang['Nav3']?></a>
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

        
    </ul>

    <div id="cover-ctn-search"></div>  

</header>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

	<!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center">
        <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto col-12">
                        <div class="hero-text mt-5 text-center">
                            <h1 class="text-white" data-aos="fade-up" data-aos-delay="500"><?php echo $lang['Sug1']?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- FOOTER -->
	<footer class="site-footer">
        <div class="container">
            <div class="row">
				<div class="ml-auto col-lg-4 col-md-5">
					<p class="copyright-text">Copyright &copy; 2022 Epic Sound FX
					<br></i><?php echo $lang['Cont7']?>: <a href="https://www.empresa.com">Empresa</a></p>
				</div>
				<div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
					<p class="mr-4">
						<i class="fa fa-envelope-o mr-1"></i>
						<a href="#">hello@company.co</a>
					</p>
					<p><i class="fa fa-phone mr-1"></i> 010-020-0840</p>
				</div>
            </div>
        </div>
    </footer>

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
</body>
</html>