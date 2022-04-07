<?php// include('../config/connection.php') ?>
<?php include"../language/config.php" ?>

<?
include('conexion.php');// conexion a la bd
$listPer=$conexion->query("SELECT * FROM personajes ORDER BY id_personaje");// lista los registros de la tabla

if(isset($_POST['insertar']))//si apretamos el boton..
{
    $nombre=$_POST['nombre'];
    $cargarAvatar=($_FILES['avatar']['tmp_name']);//carga el archivo
    $avatar=fopen($cargarAvatar, 'rb');//leer el archivo como binario
    $cargarPoder=($_FILES['poder']['tmp_name']);//cargar/obtener el archivo
    $poder=fopen($cargarPoder, 'rb');//leer como binario
    $pais=$_POST['pais'];

    $insertarPJ=$conexion->prepare("INSERT INTO personajes(nombre, avatar, poder, pais) VALUES(:nombre, :avatar, :poder, :pais)");
    $insertarPJ->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $insertarPJ->bindParam(':avatar', $avatar, PDO::PARAM_LOB);
    $insertarPJ->bindParam(':poder', $poder, PDO::PARAM_LOB);
    $insertarPJ->bindParam(':pais', $pais, PDO::PARAM_STR);
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

<html lang="es">
    <head> 
        <title>ITIC TUTORIALES</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <header>
            <div class="alert alert-info">
            <h3>Insertar/Mostrar Imagenes y Audio Directamente a la BD</h3>
            </div>
        </header>

        
        <section>
        <? echo $mensaje; ?>
            <table class="table">
                <tr class="bg-primary">
                <th>ID</th>
                <th>AVATAR</th>
                <th>NOMBRE</th>
                <th>PODER</th>
                <th>PAÍS</th>
                </tr>
                <?
                    while ($perFila=$listPer->fetch(PDO::FETCH_ASSOC))
                    {
                    echo '<tr>
                            <td>'.$perFila['id_personaje'].'</td>
                            <td><img src="data:image/png;base64, '.base64_encode($perFila['avatar']).'"></td>
                            <td>'.$perFila['nombre'].'</td>
                            <td><audio controls><source src="data:audio/mp3;base64,'.base64_encode($perFila['poder']).'"></audio controls></td>
                            <td>'.$perFila['pais'].'</td>
                         </tr>';
                    }
                ?>
            </table>
            <form method="POST" enctype="multipart/form-data">
                <table class="table">
                <tr><th colspan="5" class="bg-primary text-center" >NUEVO PERSONAJE</th></tr>
                <tr class="bg-primary">
                <th>AVATAR</th>
                <th>NOMBRE</th>
                <th>PODER</th>
                <th>PAÍS</th>
                <th>ACCION</th>
                </tr>
                <tr class="bg-info">
                <td><input name="avatar" type="file" class="form-control"></td>
                <td><input name="nombre" type="text" class="form-control" placeholder="Nombre"></td>
                <td><input name="poder" type="file" class="form-control""></td>
                <td><input name="pais" type="text" class="form-control" placeholder="País"></td>
                <td><input name="insertar" type="submit" class="btn btn-success" value="Insertar Personaje" > </td>
                </tr>
                </table>
                <br>
                <br>
                
            </form>