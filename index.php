<?php include('config/connection.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

     <title>LATINFXSOUND***</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     
     <script src="js/translate.js"></script>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">

</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.html">LATINFXSOUND***</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll lang" key="Inicio">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll lang" key="Acerca">Acerca de nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a href="#sonidos" class="nav-link smoothScroll">Sonidos</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll" data-toggle="modal" data-target="#iniciarSesion">Iniciar sesion</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contacto</a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
                
                <ul class="social-icon ml-lg-3">
                    <li><button class="nav-item translate lang-choice" id="en" onclick="changeLanguage(this.id)">English</button></li>
                    <li><button class="nav-item translate lang-choice" id="es" onclick="changeLanguage(this.id)">Español</button></li>
                </ul>
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300" class="lang" key="Tex1">La mejor musica libre de derechos</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Descarga la musica de ambientacion que necesites</h1>

                                    <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Comienza ahora</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">Ya eres miembro? inicia sesion</a>

                                    <h4 class="text-white" data-aos="fade-up" data-aos-delay="600" align="rigth">Sonido de prueba
                                        <br>
                                            <div>
                                                <img src="images/huevo.jpg" class="img-fluid" alt="Class" width="200" height="200">
                                        <audio controls>
                                            <source src="audios/huevo.mp3" type="audio/mp3">
                                                    Tu navegador no soporta audio HTML5.
                                        </audio>
                                            </div>
                                        
                                    </h4>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-left ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">Nuevo en LATINXSOUND?</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Membresia mensual</h6>
                    <h6 class="mb-4 text-white" data-aos="fade-up">Membresia trimestral</h6>
                    <h6 class="mb-4 text-white" data-aos="fade-up">Membresia semestral</h6>
                    <h6 class="mb-4 text-white" data-aos="fade-up">Membresia anual</h6>

                    

                    <a href="web_services/registrer.php" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="web_services/registrer.php">Compra tu subscripcion</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Formas de pago</h2>

                               <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Visa</strong>

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Master Card</strong>

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">American Express</strong>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">PayPal</strong>
                          </div>
                     </div>
                </div>
            </div>
        </div>
    </section>


     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Somos LatinFXsound</h2>

                                <p data-aos="fade-up" data-aos-delay="400">Somos un grupo que se dedica a la creacion de sonidos libres de derechos y de autoria propia ideal para tus proyectos de produccion musical.</p>

                                

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="images/pmusical.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Produccion</h3>
                                        <span>sonidos originales</span>

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

                                        <h3>Calidad</h3>
                                        <span>Contenido de calidad</span>

                                        
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- sonidos -->
     <section class="class section" id="sonidos">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h6 data-aos="fade-up">Los mejores sonidos</h6>

                                <h2 data-aos="fade-up" data-aos-delay="200">Lo mas descargado</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="images/class/cocinando.jpeg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Sonido de Cocina</h3>

                                        <span><strong>By</strong> - LatinFXsound</span>

                                        <span class="class-price">$50</span>

                                        <p class="mt-3">Cascaron de huevo rompiendoce, salteado de aceite, sonido de rebanar</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="class-thumb">
                                    <img src="images/class/transportes.jpeg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Sonidos de transportes</h3>

                                        <span><strong>By</strong> - LatinFXsound</span>

                                        <span class="class-price">$66</span>

                                        <p class="mt-3">Claxon, encendido de auto, sonido de acelerar</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/naturaleza.jpeg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Sonidos naturales</h3>

                                        <span><strong>By</strong> - LatinFXsound</span>

                                        <span class="class-price">$75</span>

                                        <p class="mt-3">Canto de pajaros, sonido del viento, sonido de olas</p>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


    

     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Alguna duda? envianos un correo</h2>

                        <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="cf-name" placeholder="Nombre">

                            <input type="email" class="form-control" name="cf-email" placeholder="Email">

                            <textarea class="form-control" rows="5" name="cf-message" placeholder="Mensaje"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Enviar mensaje</button>
                        </form>
                    </div>
               
                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Donde puedes<span>encontrarnos</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> Direccion del cliente</p>
<!-- How to change your own map point
    1. Ir a google map
    2. Click en la localidad del cliente
    3. Click en "compartir" y elegir "incorporar un mapa" tab
    4. Copiar solo la URL en el campo src="" 
-->
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                           <iframe src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
                        <p class="copyright-text">Copyright &copy; 2020 LatinFXsound
                        
                        <br>Diseño: <a href="https://www.empresa.com">Empresa</a></p>
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
                    <h2 class="modal-title" id="membershipFormLabel">Inicio de Sesion</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
            <form method="post" class="membership-form webform" role="form" action="">
                    <?php include('web_services/errors.php'); ?>
                    <div class="input-group">
                        <input type="email" class="form-control" name="user_email" placeholder="Direccion email">
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control" name="user_password" placeholder="Contraseña">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="form-control" id="login_user" name="login_user">Continuar</button>
                    </div>
                    <br><p>
                        Aun no te has registrado? <a href="web_services/registrer.php">Registrate ahora mismo</a>
                    </p>
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
</body>
</html>