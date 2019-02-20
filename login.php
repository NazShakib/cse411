<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="plugins/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="plugins/slick-carousel/slick/slick-theme.css"/>
    <title>Software Project | E-commerce </title>

</head>

<body>


<?php require_once 'db.php'; ?>

<?php
if(isset($_SESSION['message'])) : ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>" >
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>

<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="log_action.php">
        <div class="row ">
            <div class="col-md-4">

            </div>
            <div class="col-md-5 mt-5">
                <h2 class="text-center">User Login</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-2 field-label-responsive">
                <label for="email">E-Mail Address</label>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="useremail" size="50px" class="form-control" id="email"
                               placeholder="Enter Your Email" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-2 field-label-responsive">
                <label for="email">Password</label>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="password" name="userpassword" size="50px" class="form-control" id="email"
                               placeholder="Enter Your Password" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">

            </div>
            <div class="col-md-2">
                <a href="signUp.php">Haven't Any Account?</a>
            </div>
            <div class="col-md-3">
                <button type="submit" name="login" value="login" class="btn btn-success">
                    <span class="fa fa-user-plus float-right"></span>  Login
                </button>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </form>
</div>




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