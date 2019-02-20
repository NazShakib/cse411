<?php 
session_start();
if(!isset($_SESSION['login'])){
	$_SESSION['login'] = md5(time());
}

$search = $_GET['q'];
?>

<!DOCTYPE html>
 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 

  <title>Search || Soft Shop | E-commerce </title>

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

<!-- Start Top Header Bar -->
 <?php include "header.php" ;

 require 'admin/db.php';

 $sql = "SELECT * FROM products WHERE pname LIKE '%$search%' LIMIT 10";
 $act = $db->query($sql);
  		$row = mysqli_num_rows($act);
$counter = 0;
 ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Search</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Search for: <?php echo $search; ?></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<?php if ($row == 0): ?>
	<div class="jumbotron">
		<div class="container-fluid">
		<h2>No Such Product for  " <?php echo $search ?> "</h2>
	</div>
</div>
<?php endif ?>


<section class="products section">
	<div class="container">
		<div class="row">

			<?php 

			foreach ($act as $key) {
			?>
			<div class="col-md-4">
							<div class="product-item">
								<div class="product-thumb">
									<span class="bage">Sale</span>
									<img class="img-responsive" src="images/shop/products/<?php echo $key['thumbnail']; ?>" alt="product-img" />
									<div class="preview-meta">
										<ul>
											<li>
												<span  data-toggle="modal" data-target="#product-modal">
													<i class="tf-ion-ios-search-strong"></i>
												</span>
											</li>
											<li>
						                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
											</li>
											<li>
												<a href=""><i class="tf-ion-android-cart"></i></a>
											</li>
										</ul>
			                      	</div>
								</div>
								<div class="product-content">
									<h4><a href="product.php?p=<?php echo $key['pid']; ?>"><?php echo $key['pname']; ?></a></h4>
									<p class="price"> <?php echo $key['price']; ?> ৳</p>
								</div>
							</div>
						</div>

			<?php 
			$counter = $counter + 1;
			if($counter % 3 == 0){		
			?> 
			<div class="clearfix"></div>
			<?php  }
				}
			?>

			
 
		<!-- Modal -->
		<div class="modal product-modal fade" id="product-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i class="tf-ion-close"></i>
			</button>
		  	<div class="modal-dialog " role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-8 col-sm-6 col-xs-12">
			        			<div class="modal-image">
				        			<img class="img-responsive" src="images/shop/products/modal-product.jpg" alt="product-img" />
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6 col-xs-12">
			        			<div class="product-short-details">
			        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
			        				<p class="product-price">$200</p>
			        				<p class="product-short-description">
			        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
			        				</p>
			        				<a href="cart.html" class="btn btn-main">Add To Cart</a>
			        				<a href="product-single.html" class="btn btn-transparent">View Product Details</a>
			        			</div>
			        		</div>
			        	</div>
			        </div>
		    	</div>
		  	</div>
		</div><!-- /.modal -->

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

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>
