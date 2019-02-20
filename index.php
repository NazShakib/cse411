<?php 

session_start();
if(!isset($_SESSION['login'])){
	$_SESSION['login'] = md5(time());
}

?>

<!DOCTYPE html>

<html class="no-js"> 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Software Project | E-commerce </title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/font-awesome.css">

  <link rel="stylesheet" type="text/css" href="plugins/slick-carousel/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="plugins/slick-carousel/slick/slick-theme.css"/>
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<?php require 'header.php'; ?>

<div class="home-slider">
 	<div>
  		<div class="slider-item dark-bg" style="background-image:url('images/slider/slider-1.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="slide-inner text-left">
							<h1>Winter Collection</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae aut illum ratione? <br> Aliquam facilis dolorem dolor illum saepe commodi ratione.</p>
							<a href="" class="btn btn-main">Buy Now</a>
						</div>		
					</div>
				</div>
				
			</div>
		</div>
  	</div>
</div>


<section class="product-category section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title text-center">
					<h2>Product Category</h2>
				</div>
			</div>
 
		</div>
	</div>
</section>

<?php 

require 'admin/db.php';

$sql = "SELECT * FROM products Limit 10";
$act = $db->query($sql);


$counter = 0;
 ?>

<section class="products section bg-gray">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>Trendy Products</h2>
			</div>
		</div>
		<div class="row">
			
			<?php foreach ($act as $key){ ?>
				
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Sale</span>
						<img class="img-responsive" src="images/shop/products/<?php echo $key['thumbnail']; ?>" alt="product-img"  />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal<?php echo $key['pid']; ?>">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
								<li><a href="#" ><i class="tf-ion-ios-heart"></i></a></li>
								<li><a href="#"><i class="tf-ion-android-cart"></i></a></li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product.php?p=<?php echo $key['pid']; ?>"><?php echo $key['pname']; ?></a></h4>
						<p class="price">৳ <?php echo $key['price']; ?></p>
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



 
		<?php foreach ($act as $modal): ?>
			

		<!-- Modal -->
		<div class="modal product-modal fade" id="product-modal<?php echo $modal['pid']; ?>">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i class="tf-ion-close"></i>
			</button>
		  	<div class="modal-dialog " role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-8 col-sm-6 col-xs-12">
			        			<div class="modal-image">
				        			<img class="img-responsive" src="images/shop/products/<?php echo $modal['thumbnail']; ?>" alt="product-img" />
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6 col-xs-12">
			        			<div class="product-short-details">
			        				<h2 class="product-title"><?php echo $modal['pname']; ?></h2>
			        				<p class="product-price">৳ <?php echo $modal['price']; ?></p>
			        				<p class="product-short-description">
			        					<?php echo $modal['detail']; ?>
			        				</p>
			        				<a href="cart.html" class="btn btn-main">Add To Cart</a>
			        				<a href="product.php?p=<?php echo $modal['pid']; ?>" class="btn btn-transparent">View Product Details</a>
			        			</div>
			        		</div>
			        	</div>
			        </div>
		    	</div>
		  	</div>
		</div><!-- /.modal -->

		<?php endforeach ?>

		</div>
	</div>
</section>


<!--
Start Call To Action
==================================== -->
<section class="call-to-action bg-gray section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="title">
					<h2>SUBSCRIBE TO NEWSLETTER</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, <br> facilis numquam impedit ut sequi. Minus facilis vitae excepturi sit laboriosam.</p>
				</div>
				<div class="col-lg-6 col-md-offset-3">
				    <div class="input-group subscription-form">
				      <input type="text" class="form-control" placeholder="Enter Your Email Address">
				      <span class="input-group-btn">
				        <button class="btn btn-main" type="button">Subscribe Now!</button>
				      </span>
				    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->

			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<section class="section instagram-feed">
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
</section>


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
