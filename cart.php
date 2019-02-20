<?php 

session_start();
if(!isset($_SESSION['login'])){
	header( "refresh:1;url=index.php" );
}
if(isset($_SESSION['login'])){
		$uid = $_SESSION['login'];
	}

$stockError = 0;
?>

<!DOCTYPE html>

<html class="no-js"> 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Cart || Software Project | E-commerce </title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/font-awesome.css">

  <link rel="stylesheet" type="text/css" href="plugins/slick-carousel/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="plugins/slick-carousel/slick/slick-theme.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<?php require 'header.php'; ?>



 <div class="clearfix"></div>

<div class="container-fluid ">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="../cse411/">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Cart</li>
	  </ol>
	</nav>
 
</div>
<?php 
  		require 'db.php';
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
 ?>

 <div class="container ">
 	<table class="table table-hover table-success text-left">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Act</th>
      <th scope="col">Product ID</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Rate</th>
      <th scope="col">Total</th>
      
    </tr>
  </thead>
  <tbody>
  	<?php 


  		$count = 0;
  		$total = 0;
  		foreach ($act as $key) { 
  			$count = $count+1;

  		?>

    <tr>
      <th scope="row"> <?php echo $count; ?> </th>
      <td><a href="delete_cart.php?p=<?php echo $key['pid']; ?>&u=<?php echo $uid ?>"><i class="fa fa-times" style="color:red"></i></a></td>
      <td><?php echo $key['pid']; ?></td>
      <td><?php echo $key['pname']; ?></td>
      
      <td><?php if ($key['amount'] > $key['quantity']): ?>
      	<?php echo "Out of Stock"; $stockError = 1; ?>
      <?php endif ?><?php echo $key['amount']; ?></td>

      <td><?php echo $key['price']; ?> ৳</td>
      <td><?php echo $subTotal = $key['amount']* $key['price']; ?> ৳ </td>
    </tr>
 
   	<?php   			
   	$total = $total + $subTotal;
  		}
  	?>
  	<tr>
  		<td></td>
  		<td></td>
  		<td></td>
  		<td></td>
  		<td></td>
  		<th>Total</th>
  		<th class="table-success"> <?php echo $total; ?> ৳</th>
  	</tr>
  </tbody>
</table>
 </div>





 <!-- checkout section -->
<div class="container-fluid">
 <div class="jumbotron">
 	<h2>Checkout</h2>
 </div>


<form class="form-group" action="checkout.php" method="post">
 
	 <input type="hidden" name="uid" value="<?php echo $uid; ?>">
	 <input type="hidden" name="stock" value="<?php echo $stockError; ?>">

	<input type="text" name="fname" placeholder="First Name" value="" class="form-control" required>
	<input type="text" name="lname" placeholder="Last Name" class="form-control" required>
	<input type="email" name="email" placeholder="Email" class="form-control" required>
	<input type="tel" name="contact" placeholder="Contact No." class="form-control" required>
	<input type="text" name="address" placeholder="Address" class="form-control" required>

	<input type="submit" name="submit" value="Checkout" class="form-control btn btn-primary ">
 
</form>

</div>
 

<?php } ?>		<!-- closing bracket for else case -->


	<div class="container">
		<div class="row">
			<div class="title">
				<h2>Check out us on Social Site</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
 			</div>
		</div>
	</div>
 

<?php require 'footer.php'; ?>


    <!-- 
    Essential Scripts
    =====================================-->
    

    <!-- Main jQuery -->
    <script src="https://code.jquery.com/jquery-git.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Instagram Feed Js -->

    <!-- Slick Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Google Map js -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBItRd4sQ_aXlQG_fvEzsxvuYyaWnJKETk&callback=initMap"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>
