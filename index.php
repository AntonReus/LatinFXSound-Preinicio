<?php include ("language/config.php");?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

     <title>Epic Sound FX</title>

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
                        <a href="#home" class="nav-link smoothScroll" id="Inicio"><?php echo $lang['Nav1']?></a>
                    </li>

                    <li class="nav-item">
                        <a href="Paginas/biblioteca.php" class="nav-link smoothScroll"><?php echo $lang['Nav3']?></a>
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

        <li>
           
            <a href="Paginas/AlbumCocina.php">
                <i class="fas fa-search"></i><?php echo $lang['AC']?>
            </a>
        </li>
        
    </ul>

    <div id="cover-ctn-search"></div>  

</header>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center">
        <div ></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto col-12">
                        <div class="hero-text mt-5 text-center">
                            <h6 data-aos="fade-up" data-aos-delay="300"><?php echo $lang['Hero1']?></h6>
                            <h1 class="text-white" data-aos="fade-up" data-aos-delay="500"><?php echo $lang['Hero2']?></h1>
                            <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600"><?php echo $lang['Hero3']?></a>
                            <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700"><?php echo $lang['Hero4']?></a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Inicio de session  -->
     <section class="feature" id="feature" style="">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column justify-content-left ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="hero3" data-aos="fade-up"><?php echo $lang['Ini1']?></h2>
                    <h6 class="hero3" data-aos="fade-up"><?php echo $lang['Ini2']?></h6>
                    <a href="web_services/registrer.php" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="web_services/registrer.php"><?php echo $lang['Ini11']?></a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>
                            <div id="smart-button-container">
                                <div style="text-align: center;">
                                    <div id="paypal-button-container"></div>
                                </div>
                            </div>
                            
                            <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
                                <script>
                                    function initPayPalButton() {
                                        paypal.Buttons({
                                            style: {
                                                shape: 'rect',
                                                color: 'gold',
                                                layout: 'vertical',
                                                label: 'paypal',
          
                                            },

                                        createOrder: function(data, actions) {
                                            return actions.order.create({
                                                purchase_units: [{"description":"Epic Sound FX Payment","amount":{"currency_code":"USD","value":10}}]
                                            });
                                        },

                                        onApprove: function(data, actions) {
                                            return actions.order.capture().then(function(orderData) {
                                                // Full available details
                                                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                                // Show a success message within this page, e.g.
                                                const element = document.getElementById('paypal-button-container');
                                                element.innerHTML = '';
                                                element.innerHTML = '<h3>Thank you for your payment!</h3>';

                                                // Or go to another URL:  actions.redirect('thank_you.html');
            
                                            });
                                        },

                                        onError: function(err) {
                                            console.log(err);
                                        }
                                        }).render('#paypal-button-container');
                                    }
                                    initPayPalButton();
                                </script>
                               
                        </div>
                    </div>
                </div>

                    
            </div>
        </div>
    </section>

     <!-- ABOUT -->
    <!-- <section class="about section" id="about">
               <div class="container">
                    <div class="row">
                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300"><?php echo $lang['About1']?></h2>
                                <p data-aos="fade-up" data-aos-delay="400"><?php echo $lang['About2']?></p>
                            </div>
                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="images/pmusical.jpg" class="img-fluid" alt="Trainer">
                                    <div class="team-info d-flex flex-column">
                                        <h3><?php echo $lang['About3']?></h3>
                                        <span><?php echo $lang['About4']?></span>
                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <img src="images/persona.jpeg" class="img-fluid" alt="Trainer">
                                    <div class="team-info d-flex flex-column">
                                        <h3><?php echo $lang['About5']?></h3>
                                        <span><?php echo $lang['About6']?></span>
                                    </div>
                                </div>
                            </div>
                    </div>
               </div>
    </section> -->

     <!-- Albums -->
      <section class="class section hero4" id="class" style="">
               <div class="container">
                    <div class="row">

                            <div class="hero3 col-lg-12 col-12 text-center mb-5">
                                <h6 data-aos="fade-up">Miles de albumes libres de derecho</h6>

                                <h2 data-aos="fade-up" data-aos-delay="200">Los mas escuchados</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="images/class/cocinando.jpeg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <a href="Paginas/AlbumCocina.php">
                                            <h3 class="mb-1"><?php echo $lang['Sound3']?></h3>
                                        </a>
                                       

                                        

                                        <p class="mt-3"><?php echo $lang['Sound6']?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="class-thumb">
                                    <img src="images/class/transportes.jpeg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><?php echo $lang['Sound7']?></h3>

                                        

                                        

                                        <p class="mt-3"><?php echo $lang['Sound10']?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/natural.jpeg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><?php echo $lang['Sound11']?></h3>

                                        

                                        

                                        <p class="mt-3"><?php echo $lang['Sound14']?></p>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- CONTACT -->
     <!-- <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200"><?php echo $lang['Cont1']?></h2>

                        <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="cf-name" placeholder="<?php echo $lang['Cont2']?>">

                            <input type="email" class="form-control" name="cf-email" placeholder="<?php echo $lang['Cont3']?>">

                            <textarea class="form-control" rows="5" name="cf-message" placeholder="<?php echo $lang['Cont4']?>"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit"><?php echo $lang['Cont5']?></button>
                        </form>
                    </div>
               
                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600"><?php echo $lang['Cont6']?></span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><?php echo $lang['Cont6']?></p> -->
<!-- How to change your own map point
    1. Ir a google map
    2. Click en la localidad del cliente
    3. Click en "compartir" y elegir "incorporar un mapa" tab
    4. Copiar solo la URL en el campo src="" 
-->
                        <!-- <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                           <iframe src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    
               </div>
          </div>
     </section> -->

    <!-- FOOTER -->
    <footer style="" class="hero4 site-footer">
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

    <!-- Iniciar sesion -->
    <div class="modal fade" id="iniciarSesion" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="membershipFormLabel"><?php echo $lang['InSes1']?></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <a class="social-icon ml-lg-3" href="password_recovery/recover.php"><?php echo $lang['InSes7']?></a>
                </div>
                <div class="modal-body">
                    <form method="post" class="membership-form webform" role="form" action="">
                        <?php include('web_services/errors.php'); ?>
                        <div class="input-group">
                            <input type="email" class="form-control" name="user_email" placeholder="<?php echo $lang['InSes2']?>">
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control" name="user_password" placeholder="<?php echo $lang['InSes3']?>">
                        </div>
                        <div class="input-group">
                            <button type="submit" class="form-control" id="login_user" name="login_user"><?php echo $lang['InSes4']?></button>
                        </div>
                        <br><p><?php echo $lang['InSes5']?> <a href="web_services/registrer.php"><?php echo $lang['InSes6']?></a></p>
                    </form>
                </div>
            <div class="modal-footer"></div>
        </div>
    </div>

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