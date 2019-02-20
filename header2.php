<?php 
  		require 'db.php';
  		$uid = $_SESSION['login'];
  		$sql = "SELECT * FROM cart NATURAL JOIN products  WHERE uid = '$uid' ";
  		$act = $db->query($sql);
  		$row = mysqli_num_rows($act);

 ?>

<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span>017 11 111 111</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="index.php">E-commerce		</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
			<!-- Cart -->
			<ul class="top-menu text-right list-inline">
	          <li class="dropdown cart-nav dropdown-slide">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-android-cart"></i>Cart</a>
	            <div class="dropdown-menu cart-dropdown">
	    <?php 

  		$total = 0;
  		foreach ($act as $key) { 
  			
  		?>
	            			<!-- Cart Item -->
	            	<div class="media">
	            		<a class="pull-left" href="#">
	            			<img  class="media-object" src="images/shop/products/<?php echo $key['thumbnail']; ?>" alt="image" />
	            		</a>
	            		<div class="media-body">
	            			<h4 class="media-heading"><a href=""><?php echo $key['pname']; ?></a></h4>
	            			<div class="cart-price">
                              <span> <?php echo $key['amount']; ?> x</span>
                              <span> <?php  echo $key['price']; ?></span>
                            </div>
                            <h5><strong>$ <?php echo $subTotal = $key['amount']* $key['price']; ?></strong></h5>
	            		</div>
                        <a href="#" class="remove"><i class="tf-ion-close"></i></a>
	            	</div><!-- / Cart Item -->

	            	 

                   	<?php   			
					   	$total = $total + $subTotal;
					  	}
					?>
	   
	            	<div class="cart-summary">
                        <span>Total</span>
                        <span class="total-price">$<?php echo $total; ?></span>
                    </div>

                    <ul class="text-center cart-buttons">
                    	<li><a href="cart.php" class="btn btn-small">View Cart</a></li>
                    	<li><a href="" class="btn btn-small btn-solid-border">Checkout</a></li>
                    </ul>
                </div>

	          </li><!-- / Cart -->

	          <!-- Search -->
	          <li class="dropdown search dropdown-slide">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-ios-search-strong"></i> Search</a>
	            <ul class="dropdown-menu search-dropdown">
	              <li><form action="post"><input type="search" class="form-control" placeholder="Search..."></form></li>
	            </ul>
	          </li><!-- / Search -->
	          <?php 
	          if(isset($_SESSION['login'])){ 
	          	if(strlen($_SESSION['login']) != 32){
	          	?> 
	          	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
	           ><i class="tf-ion-android-contact"></i><?php echo $_SESSION['user_name']; ?></a>
	           <ul class="dropdown-menu">
	              <li><a href="logout.php">logout</a></li>
	            </ul>
	       </li>

	          <?php 
	          }
	          else{ 
	          ?>

	          <li><a href="login.php"
	           ><i class="tf-ion-android-contact"></i>Login</a></li>

	       		<?php }
	       		} ?>

	        </ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation navbar-color">
	    <div class="container">
	      <div class="navbar-header">
	      	<h2 class="menu-title">Main Menu</h2>
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>

	      </div><!-- / .navbar-header -->
</div><!-- / .container -->
	      <!-- Navbar Links -->
	      <div id="navbar" class="navbar-collapse collapse text-center nav-menu">
	        <ul class="nav navbar-nav">
	          <!-- Home -->
	          <li class="dropdown ">
	            <a href="index.php">Home</a> </li><!-- / Home -->


	          <!-- Elements -->
	          <li><a href="shop.php">Shop</a> </li><!-- / Elements -->
	          <!-- Elements -->
	          <li>      <a href="#">About</a> </li><!-- / Pages -->
	          <li>  <a href="contact.html">Contact</a> </li><!-- / Elements -->
 

	        </ul><!-- / .nav .navbar-nav -->

	      	</div><!--/.navbar-collapse -->
	    
	</nav>
</section>
