<!DOCTYPE html>
 
<?php 
session_start();
if(!isset($_SESSION['login'])){
	$_SESSION['login'] = md5(time());
}

$pid = 1; // initially 1

if (isset($_GET['p'])) {
 $pid = $_GET['p'];
}

require 'admin/db.php';

$sql ="SELECT * FROM products WHERE pid = $pid ";
$act = $db->query($sql);

$sql2 = "SELECT * FROM products LIMIT 4";
$act2 = $db->query($sql2);

foreach ($act as $key) {
	
}
?>
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title><?php echo $key['pname']; ?> | Soft Shop</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="plugins/slick-carousel/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="plugins/slick-carousel/slick/slick-theme.css"/>
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>




<body id="body">
 
 
<?php require 'header.php'; ?>
 
<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb">
					<li><a href="../cse411">Home</a></li>
					<li><a href="#">Shop</a></li>
					<li class="active"><?php echo $key['pname']; ?></li>
				</ol>
			</div>
 
		</div>
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
									<img class="img-responsive" src="images/shop/products/<?php echo $key['thumbnail']; ?>" alt="product-img"  />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-2.jpg' alt='' data-zoom-image="images/shop/single-products/product-2.jpg" />
								</div>
								
								<div class='item'>
									<img src='images/shop/single-products/product-3.jpg' alt='' data-zoom-image="images/shop/single-products/product-3.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-4.jpg' alt='' data-zoom-image="images/shop/single-products/product-4.jpg" />
								</div>
																
							</div>
							
							<!-- sag sol -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>
						
						<!-- thumb -->
						<?php 
						$data_slide = 0;
						 ?>
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
								<img src="images/shop/products/<?php echo $key['thumbnail']; ?>" alt="product-img"  />
							</li>
							<li data-target='#carousel-custom' data-slide-to='1'>
								<img src='images/shop/single-products/product-2.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='2'>
								<img src='images/shop/single-products/product-3.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='3'>
								<img src='images/shop/single-products/product-4.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='4'>
								<img src='images/shop/single-products/product-5.jpg' alt='' />
							</li>
							
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-product-details">
					<h2><?php echo $key['pname']; ?></h2>
					<p class="product-price">$<?php echo $key['price']; ?></p>
					<p class="product-price">Quantity : <?php echo $key['quantity']; ?></p>
					
					<p class="product-description mt-20">
						<b>Details:</b> <?php echo $key['detail']; ?>
					</p>					

					<?php 

					if(isset($_SESSION['login'])){
						  $uid = $_SESSION['login'];
					}
					

					?>
 					<?php echo $key['pid']; ?>
 						<form action="addcart.php" method="POST">
 							<input type="hidden" name="cart-uid" value="<?php echo $uid; ?>">
 							<input type="hidden" name="cart-pid" value="<?php echo $key['pid']; ?>">
					<div class="product-quantity" >
						<input id="product-quantity" type="text" value="1" name="cart-quantity" style="width: 10%; margin-right: 10px">
						
						<button type="submit" class="btn btn-main" name="submit">Add To Cart </button>
						
					</div>
					</form>
						 
					<div class="product-category">
						<span>Categories:</span>
						<ul>
							<li><a href="#">Products</a></li>
							<li><a href="#">Soap</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="tabCommon mt-20">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Details</a></li>
					</ul>
					<div class="tab-content patternbg">
						<div id="details" class="tab-pane fade active in">
							<h4>Product Description</h4>
							<p><?php echo $key['description']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="products related-products section">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>Related Products</h2>
			</div>
		</div>
		<div class="row">
			<?php 
				foreach ($act2 as $random) {	?>
					
				<div class="col-md-3">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Sale</span>
						<img class="img-responsive" src="images/shop/products/<?php echo $random['thumbnail']; ?>" alt="<?php echo $random['pname']; ?>" />
						<div class="preview-meta">
							<ul>
								
								<li>
			                        <a href="product.php?p=<?php echo $random['pid']; ?>" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="product.php?p=<?php echo $random['pid']; ?>"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product.php?p=<?php echo $random['pid']; ?>"><?php echo $random['pname']; ?></a></h4>
						<p class="price">$<?php echo $random['price']; ?></p>
					</div>
				</div>
			</div>
			<?php 	
				}
			?>

	 
			
		</div>
	</div>
</section>



 
<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu">
					<li>
						<a href="">CONTACT</a>
					</li>
					<li>
						<a href="">SHIPPING</a>
					</li>
					<li>
						<a href="">TERMS OF SERVICE</a>
					</li>
					<li>
						<a href="">PRIVACY POLICY</a>
					</li>
				</ul>
				<p class="copyright-text">Powered by Bootstrap</p>
			</div>
		</div>
	</div>
</footer>
 


    <!-- 
    Essential Scripts
    =====================================-->
    

    <!-- Main jQuery -->
    <script src="https://code.jquery.com/jquery-git.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed.js/instafeed.min.js"></script>
    <!-- Slick Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Google Map js -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBItRd4sQ_aXlQG_fvEzsxvuYyaWnJKETk&callback=initMap"></script>
    <!-- cart js -->
    <script src="js/cart.js"></script>
    <!-- Main Js File -->
    <script src="js/script.js"></script>

    <script>
    	$(function(){
		  Cart.initJQuery();
		});
    </script>
    


  </body>
  </html>