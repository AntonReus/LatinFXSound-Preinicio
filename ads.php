<?php 

include("..config/config.php");
if(isset($_POST['insert'])){
    $nom = $_POST['nombre_sonido'];
    $dur = $_POST['duracion'];
    $bits = $_POST['BPM'];
    $alb = $_POST['album'];
    $son = $_POST['sonido'];
    
    

    $query ="INSERT INTO can(nombre, sonido, duracion, bpm, album) VALUES ( '$nom', '$dur', '$bits', '$alb', '$son')";
    $res = mysqli_query($conn, $query);
    if(!$res){
        die("Query failed");
    }

    $_SESSION['message'] ="Pedido Agregado";
    $_SESSION['message_type'] = 'success';


    header("Location: insertarCE.php");
}


?>