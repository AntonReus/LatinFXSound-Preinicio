<?
include('config/config.php');// conexion a la bd
//$listPer=$conexion->query("SELECT * FROM personajes ORDER BY id_personaje");// lista los registros de la tabla

if(isset($_POST['insertar']))//si apretamos el boton..
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

    else //pero si no se ejecuta correctamente, lanza el mensaje:
    {
        $mensaje="<div class='col-md-offset-4 col-md-4 alert alert-danger text-center'>
        ¡EL PERSONAJE NO PUDO AGREGARSE!</div>";
    }
}
?>