<!DOCTYPE html>
<?php require_once("config/configdb.php");
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
if(isset($_SESSION["login_sess"])) 
{
  header("location:account.php"); 
}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
    <title><?php echo $lang['Title3']?> | Epic Sound FX</title>
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
    <!-- Header -->
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
                </ul>
                --------------
                <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>
            <ul class="social-icon ml-lg-3">
                <li>
                    <a href="recover.php?lang=es"><?php echo $lang['es']?></a>
                    <a href="recover.php?lang=en"><?php echo $lang['en']?></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<body>
    <section class="forms d-flex flex-column justify-content-center align-items-center">
        <div class="bg-overlay"></div>
            <div class="" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="membershipFormLabel"><?php echo $lang['Rec1']?></h2>
                            <a type="button" class="close" data-dismiss="modal" aria-label="Close" href="index.php">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <form action="forgot_process.php" method="POST">
                            <div class="login_form">
                                <div class="form-group">
                                    <?php if(isset($_GET['err'])){
                                        $err=$_GET['err'];
                                        echo '<p class="errmsg">No user found. </p>';
                                        } 
                                        // If server error 
                                        if(isset($_GET['servererr'])){ 
                                        echo "<p class='errmsg'>The server failed to send the message. Please try again later.</p>";
                                        }
                                        //if other issues 
                                        if(isset($_GET['somethingwrong'])){ 
                                        echo '<p class="errmsg">Something went wrong.  </p>';
                                        }
                                        // If Success | Link sent 
                                        if(isset($_GET['sent'])){
                                        echo "<div class='successmsg'>Reset link has been sent to your registered email id . Kindly check your email. It can be taken 2 to 3 minutes to deliver on your email id . </div>"; 
                                        }
                                    ?>
                                    <?php if(!isset($_GET['sent'])){ ?>
                                    <div class="input-group">
                                        <input type="text" name="login_var" value="<?php if(!empty($err)){ echo  $err; } ?>" class="form-control" required="" placeholder="<?php echo $lang['InSes2']?>">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <button type="submit" name="subforgot" class="form-control"><?php echo $lang['Rec3']?></button>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                        <br> 
                        <p>Have an account? <a href="login.php">Login</a> </p>
                            <p>Don't have an account? <a href="registrer.php">Sign up</a> </p> 
                        </div>
                    <div class="col-sm-4">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>