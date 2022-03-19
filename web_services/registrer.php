<?php

    header('Content-type: application/json');
    require_once '../config/connection.php';

    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    $sql_verify = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
    if((mysqli_num_rows($sql_verify))>0)
    {
        $response_array['status']='fail';
    }
    else
    {
        $sql_insert = mysqli_query($con,"INSERT INTO users(email,password)VALUES('$email','$password')");
        if($sql_insert)
        {
            $response_array['status']='success';
        }
    }

    echo json_encode($response_array);

?>