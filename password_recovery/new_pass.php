<?php include ("../language/config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>LATINFXSOUND*** - Recover</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/tooplate-gymso-style.css">
</head>
<body>
    <div class="registrer bg-overlay modal-dialog-center" id="iniciarSesion" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="membershipFormLabel"><?php echo $lang['Rec4']?></h2>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close" href="../index.php">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
            <div class="modal-body">
                <form method="post" class="membership-form webform" role="form" action="new_pass.php">
                    <?php include('../web_services/errors.php'); ?>
                    <?php echo $lang['Rec5']?>
                    <div class="input-group">
                        <input type="password" class="form-control" name="user_password_1" id="user_password_1" placeholder="<?php echo $lang['Reg4']?>">
                    </div>
                    <div class="input-group">
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
</body>
</html>