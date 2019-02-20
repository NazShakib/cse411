<?php 
  		require 'db.php';

echo $uid = $_POST['uid'];
echo $stock = $_POST['stock'];
echo $fname = $_POST['fname'];
echo $lname = $_POST['lname'];
echo $email = $_POST['email'];
echo $contact = $_POST['contact'];
echo $address = $_POST['address'];

echo $name = $fname. " ". $lname;

  	if($stock == 1){
  		echo "stock problem".'<br>';
  			header( "refresh:1;url=index.php" );
  	}
  	else{
  		$sql = "SELECT * FROM cart NATURAL JOIN products  WHERE uid = '$uid'";
  		$act = $db->query($sql);
  		$row = mysqli_num_rows($act);
  		if($row < 1){
  		?>
  		<div class="jumbotron text-center">
  			<h2>Nothing in your Cart</h2>
  		</div>
  		<?php 	
  		}
  	
  		else{
  			$sql1 = "INSERT INTO `orders`( `name`, `uid`, `email`, `address`, `contact`) VALUES('$name','$uid','$email','$address',$contact) ";
  			$act1 = $db->query($sql1);

  			$act2 = $db->query("SELECT * FROM orders WHERE `uid` = '$uid'  ORDER BY oid DESC LIMIT 1");
  			 foreach ($act2 as $key2) {
  			 	echo $oid = $key2['oid'];
  			 }


	  		foreach ($act as $key) {
	  			$pidd = $key['pid'];
	  			$amt = $key['amount'];
	  			$pricee = $key['price'];
	  			$sql3 = "INSERT INTO `order_product`  VALUES('$oid','$pidd','$pricee','$amt') ";
	  			$act3 = $db->query($sql3);


			}

			$sql4 = "DELETE FROM cart WHERE uid = '$uid' ";
			$act4 = $db->query($sql4);

  		}
  		header( "refresh:.5;url=index.php" );
}
?>