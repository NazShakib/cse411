
<?php 
session_start();
  
if($_SESSION['admin'] !=true) {
  //echo ("Access Denied!");
  echo "Access Denied!";
  $_SESSION['logerror'] = 'Login here first';
  header('Refresh: 0.5; URL=login.php');
  exit();
}
  
?>

<?php 
require 'db.php';

$pname = $_POST['pname'] ;
$price = $_POST['price'] ;
$quantity = $_POST['quantity'] ;
$detail = $_POST['detail'] ;
$description = $_POST['description'] ;
$category = $_POST['cat'] ;
$thumb ="";


$uploaddir = '../images/shop/products/';

$thumb = $_FILES['img']['name'];
$fileinfo=pathinfo($thumb);
echo $fileinfo['extension'], "\n";
echo $fileinfo['filename'], "\n";

echo  $thumb = $fileinfo['filename']. "_". date("Y-m-d_h_i_s") . "." . $fileinfo['extension'];


$uploadfile = $uploaddir . $thumb;

$sql = "INSERT INTO products(pname,price,quantity,detail,description,thumbnail,category) VALUES('$pname',$price,$quantity,'$detail','$description','$thumb','$category')";

if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
    echo "Image succesfully uploaded.";
    $act = $db->query($sql);
    $_SESSION['product-upload'] = $pname. " uploaded succesfully!!";
} else {
    echo "Image uploading failed.";
}

 header('Location: index.php');
?>

