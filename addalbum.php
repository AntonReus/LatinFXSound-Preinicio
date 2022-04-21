<?php
include('conexion.php');// conexion a la bd
$listPer=$conexion->query("SELECT * FROM canciones ORDER BY nombre");// lista los registros de la tabla

if(isset($_POST['insertaralb']))//si apretamos el boton..
{
    $nombre=$_POST['nombre'];
    $dur=$_POST['descripcion'];
    $Bits=$_POST['categoria'];
    
    

    $insertarPJ=$conexion->prepare("INSERT INTO albumes(nombre, descrpcion, categoria) VALUES(:nombre, :dura, :BitsPM)");
    $insertarPJ->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    
    $insertarPJ->bindParam(':dura', $dur, PDO::PARAM_STR);
    $insertarPJ->bindParam(':BitsPM', $Bits, PDO::PARAM_STR);
  
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
