<?php 
require 'db.php';
session_start();

if(isset($_POST['login']))
{
    echo $login_email = $_POST['useremail'];
    echo $login_password = $_POST['userpassword'];

    

    $showUser = "SELECT * FROM user_information WHERE useremail = '$login_email' and userpassword ='$login_password'";
    $result = $db->query($showUser);
    $row = mysqli_fetch_array($result) or die(mysqli_query($db));
    foreach ($result as $key) {
        echo $_SESSION['login'] = $key['userid'];
        echo $_SESSION['user_name'] = $key['username'];
    }

    $_SESSION['message']="Login Successfully";
    $_SESSION['msg_type'] = "success";
    header("location: index.php");
    exit();

}

 ?>