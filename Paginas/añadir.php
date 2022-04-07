<?php
include('../language/config.php'); /**  conexion a la bd*/
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
<?php //include ("../language/config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Epic Sound FX <?php echo $lang['Sound3']?></title>

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
<body data-spy="scroll" data-target="#navbarNav" data-offset="50" class="">




    <section class="forms d-flex flex-column justify-content-center align-items-center">
        <div class="bg-overlay"></div>
        <div class="modal-content modal-dialog">
            <div class="modal-header" ass="modal-title" id="membershipFormLabel"><h2>Añadir nuevo sonido</h2>
                <a type="button" class="close" data-dismiss="modal" aria-label="Close" href="../index.php">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form class="registrer_form" id="add_sound" role="form" method="post" action="">
                    <?php include('../web_services/errors.php'); ?>
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
    <script src="../js/jquery.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/aos.js"></script>
     <script src="../js/smoothscroll.js"></script>
     <script src="../js/custom.js"></script>
     <script src="../js/own.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="../js/jquery-3.6.0.min.js"></script>
     <script src="../js/script.js"></script>
     <script src="../js/mode.js"></script>
</body>
</html>