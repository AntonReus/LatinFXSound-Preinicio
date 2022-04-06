<?php include ("../language/config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>Recover - Epic Sound FX</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/aos.css">
     <link rel="stylesheet" href="../css/bibliotecas.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/tooplate-gymso-style.css">
</head>
<body>
    <section class="forms d-flex flex-column justify-content-center align-items-center">
        <div class="bg-overlay"></div>
        <div class=" modal-dialog-center" id="iniciarSesion" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="membershipFormLabel"><?php echo $lang['Rec4']?></h2>
                        <a type="button" class="close" data-dismiss="modal" aria-label="Close" href="../index.php">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <?php
                        if(isset($_GET['token']))
                        {
                        $token= $_GET['token'];
                        }
                        //form for submit 
                        if(isset($_POST['new_password'])){
                            extract($_POST);
                            $user_password_1 = "";
                            $user_password_2 = "";
                            $user_password_1 = mysqli_real_escape_string($conn, $_POST['user_password_1']);
                            $user_password_2 = mysqli_real_escape_string($conn, $_POST['user_password_2']);
                        if($user_password_1 ==''){
                            $error[] = 'Please enter the password.';
                        }
                        if($user_password_2 ==''){
                            $error[] = 'Please confirm the confirm password.';
                        }
                        if($user_password_1 != $user_password_2){
                            $error[] = 'Passwords do not match.';
                        }
                        if(strlen($user_password_1)>50){ // Max 
                        $error[] = 'Password: Max length 50 Characters Not allowed';
                        }
                        $fetchresultok = mysqli_query($conn, "SELECT email FROM password_resets WHERE token='$token'");
                        if($res = mysqli_fetch_array($fetchresultok))
                        {
                            $email= $res['email']; 
                        }
                        if(isset($email) != '' ) {
                            $emailtok=$email;
                        }
                        else
                        {
                            $error[] = 'Link has been expired or something missing ';
                            $hide=1;
                        }
                        if(!isset($error)){
                            $options = array("cost"=>4);
                            $user_password_1 = md5($user_password_1);
                            $resultresetpass= mysqli_query($conn, "UPDATE users SET password='$user_password_1' WHERE (email='$emailtok' OR email='$email')"); 
                            if($resultresetpass) 
                            { 
                                $success="<div class='error'><br>Tu contraseña ha sido cambiada<br><a href='../index.php'>Inicia Sesión</a></div><br>";
                                $resultdel = mysqli_query($conn, "DELETE FROM password_resets WHERE token='$token'");
                                $hide=1;
                            }
                        }
                    }
                    ?>
                <div class="modal-body">
                    <form method="post" class="membership-form webform" role="form" action="new_pass.php">
                        <?php //include('../web_services/errors.php');
                            if(isset($error)){
                              foreach($error as $error){
                                echo '<div class="error">'.$error.'</div><br>';
                              }
                            }
                            if(isset($success)){
                              echo $success;
                            }
                        ?>
                        <?php echo $lang['Rec5']?>
                        <div class="input-group">
                            <label></label>
                            <input type="password" class="form-control" name="user_password_1" id="user_password_1" placeholder="<?php echo $lang['Reg4']?>">
                        </div>
                        <div class="input-group">
                            <label></label>
                            <input type="password" class="form-control" name="user_password_2" id="user_password_2" placeholder="<?php echo $lang['Reg5']?>">
                        </div>
                        <div class="input-group">
                            <button type="submit" class="form-control" id="new_password" name="new_password">Continuar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </section>
</body>
</html>