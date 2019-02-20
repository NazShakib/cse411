<?php 

require 'db.php';

if(isset($_POST['signin']))
{
    $user_name = $_POST['username'];
    $user_email = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];

    $userCreate = "INSERT INTO user_information(username,useremail,userpassword) VALUES ('$user_name','$user_email','$userpassword')";
    if(mysqli_query($db,$userCreate))
    {
        $_SESSION['message']="SingUp Successfully";
        $_SESSION['msg_type'] = "success";

        
        
        header("location: index.php");
        exit();

    }
    else
    {
        $_SESSION['message']="Error in SignUp";
        $_SESSION['msg_type'] = "danger";
        header("location: signUp.php");
        exit();

    }

}


?>