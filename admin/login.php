<?php 
session_start();
if(isset($_SESSION['logerror'])){
	$_SESSION['log'] = $_SESSION['logerror'];
	unset($_SESSION['logerror']);
}
elseif(isset($_SESSION['email'])){
	$_SESSION['log'] = $_SESSION['email'];
	unset($_SESSION['email']);
	}
 
 
/*
if($_SESSION['email'] = true  ) {
	//already logged in
	//header("Location: ../dashboard");
	echo $_SESSION['email'];
	unset($_SESSION['email']);
} */
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In | Admin Panel</title>
	  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  
</head>
<body>

<div class="container-fluid">

		<h4>Admin Panel</h4>

		

	<div class="row">


		<div class="col-md-3"></div>
		<div class="col-md-6">
	<form class="signUp" method="POST" action="adminlog.php">
	

		<h5><?php 	if (isset($_SESSION['log'])) {
		echo $_SESSION['log']; 
		unset($_SESSION['log']);
	} ?></h5>
	
		<h3>Log In</h3>
		<div class="form-group">
			<input type="email" placeholder="Email" class="form-control" name="email" id="email" required>
		</div>
		
		<div class="form-group">
			<input type="password" placeholder="Password" class="form-control" name="password" required>
		</div>
		<button class="form-btn dx" type="submit" name="login">Log in</button>
	</form>
	</div>
<div class="col-md-3"></div>
</div>	

</div>


</body>
</html>