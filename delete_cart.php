<?php 

 $pid = $_GET['p'];
 $uid = $_GET['u'];

require 'db.php';

$sql = "SELECT * FROM cart WHERE uid = '$uid' AND pid = $pid";
$act = $db->query($sql);
foreach ($act as $key) {
		
}

$sql1 = "DELETE FROM cart WHERE uid = '$uid' AND pid = $pid";

$act1 = $db->query($sql1);


  header('Location: cart.php');

?>