<?php 
require 'db.php';
session_start();

if(isset($_POST['login']))
{
    echo $email = $_POST['email'];
    echo $password = $_POST['password'];

    

    $showUser = "SELECT * FROM admin WHERE email = '$email' and password ='$password'";
    $result = $db->query($showUser);
    $row = mysqli_fetch_array($result) or die(mysqli_query($db));
    foreach ($result as $key) {
        echo $_SESSION['admin'] = $key['userid'];
      
    }

    $_SESSION['message']="Login Successfully";
    $_SESSION['msg_type'] = "success";
    header("location: index.php");
    exit();

}

 ?>