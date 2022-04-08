<?php
include('conexion.php');// conexion a la bd
$listPer=$conexion->query("SELECT * FROM canciones ORDER BY nombre");// lista los registros de la tabla

if(isset($_POST['insertar']))//si apretamos el boton..
{
    $nombre=$_POST['nombre'];
    $dur=$_POST['duracion'];
    $Bits=$_POST['bpm'];
    $al=$_POST['album'];
    $cargarAvatar=($_FILES['sonido']['tmp_name']);//carga el archivo
    $avatar=fopen($cargarAvatar, 'rb');//leer el archivo como binario
    

    $insertarPJ=$conexion->prepare("INSERT INTO canciones(nombre, sonido, duracion, bpm, album) VALUES(:nombre, :avatar, :dura, :BitsPM, :alb)");
    $insertarPJ->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $insertarPJ->bindParam(':avatar', $avatar, PDO::PARAM_LOB);
    $insertarPJ->bindParam(':dura', $dur, PDO::PARAM_STR);
    $insertarPJ->bindParam(':BitsPM', $Bits, PDO::PARAM_STR);
    $insertarPJ->bindParam(':alb', $al, PDO::PARAM_STR);
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
    } header("Location: biblioteca.php");
}
?>

