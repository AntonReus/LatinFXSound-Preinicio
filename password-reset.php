<!DOCTYPE html>
<?php include ("config/config.php");?>
<html lang="en">
<head>
<title><?php echo $lang['Slogan']?></title>
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

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
</head>
<body>
    <section class="forms d-flex flex-column justify-content-center align-items-center">
        <div class="bg-overlay"></div>
        <div class=" modal-dialog-center" id="iniciarSesion" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="membershipFormLabel"><?php echo $lang['Rec4']?></h2>
                        <a type="button" class="close" data-dismiss="modal" aria-label="Close" href="index.php">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'latinfxsound-preinicio');
                        if(isset($_GET['token']))
                        {
                            $token= $_GET['token'];
                        }
                        //form for submit 
                        if(isset($_POST['sub_set'])){
                            extract($_POST);
                            if($password ==''){
                                $error[] = 'Please enter the password.';
                            }
                            if($passwordConfirm ==''){
                                $error[] = 'Please confirm the password.';
                            }
                            if($password != $passwordConfirm){
                                $error[] = 'Passwords do not match.';
                            }
                            if(strlen($password)<5){ // min 
                                $error[] = 'The password is 6 characters long.';
                            }
                            if(strlen($password)>50){ // Max 
                                $error[] = 'Password: Max length 50 Characters Not allowed';
                            }
                                $fetchresultok = mysqli_query($conn, "SELECT email FROM pass_reset WHERE token='$token'");
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
                                $password = password_hash($password,PASSWORD_BCRYPT,$options);
                                $resultresetpass= mysqli_query($conn, "UPDATE users SET password='$password' WHERE email='$emailtok'"); 
                                if($resultresetpass) 
                                { 
                                    $success="<div class='successmsg'><span style='font-size:100px;'>&#9989;</span> <br> Your password has been updated successfully.. <br> <a href='login.php' style='color:#fff;'>Login here... </a> </div>";
                                    $resultdel = mysqli_query($conn, "DELETE FROM pass_reset WHERE token='$token'");
                                    $hide=1;
                                }
                            }
                        }
                    ?>
                <div class="modal-body">
                    <form method="POST" class="membership-form webform" action="">
                        <div>
                            <?php echo $lang['Rec5']?>
                            <?php 
                                if(isset($error)){
                                    foreach($error as $error){
                                    echo '<div class="errmsg">'.$error.'</div><br>';
                                    }
                                }
                                if(isset($success)){
                                    echo $success;
                                }
                            ?>
                            <?php if(!isset($hide)){ ?>
                            <input type="password" name="password" class="form-control" required placeholder="<?php echo $lang['Reg4']?>">
                        </div>
                        <div class="form-group">
                            <input type="password" name="passwordConfirm" class="form-control" required placeholder="<?php echo $lang['Reg5']?>">
                        </div>
                        <button type="submit" name="sub_set" class="form-control"><?php echo $lang['Rec3']?></button>
                        <?php } ?>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </section>
</body>
</html>