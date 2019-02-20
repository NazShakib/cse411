<?php 
session_start();

echo $uid = $_POST['cart-uid'];
echo "<br>";
echo $pid = $_POST['cart-pid'];
echo "<br>";
echo $quantity = $_POST['cart-quantity'];
echo "<br>";

 require 'db.php';

$sql = "SELECT * FROM cart WHERE uid = '$uid' AND pid = $pid LIMIT 1";
$act = $db->query($sql);
 
$row = mysqli_num_rows($act);

if($row == 1){

	foreach ($act as $key) {
		echo "<br>";
	 	echo $quantity = $quantity + $key['amount'];
	 	echo $no = $key['id'];
	}

	$sql1 = "Update `cart` SET `amount` = $quantity WHERE `id` = $no";
	$act1 = $db->query($sql1);	

	unset($pid);

	header('Location: cart.php');
}
else{

	$sql1 = "INSERT INTO `cart`( `uid`, `pid`, `amount`) VALUES ('$uid',$pid,$quantity)";
	$act1 = $db->query($sql1);

}
$act2 = $db->query('SELECT LAST_INSERT_ID()');
	unset($pid);
	
  header('Location: cart.php');

 
?>
<a href="cart.php">Cart</a>