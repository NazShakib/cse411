
<?php 
session_start();
  
if($_SESSION['admin'] !=true) {
  //echo ("Access Denied!");
  echo "Access Denied!";
  $_SESSION['logerror'] = 'Login here first';
  header('Refresh: 0.5; URL=login.php');
  exit();
}
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Add Product | Admin Panel 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Soft Shop
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="../admin">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user-list.php">
              <i class="material-icons">person</i>
              <p>User list</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="product-list.php">
              <i class="material-icons">content_paste</i>
              <p>Product list</p>
            </a>
          </li>
 
          <li class="nav-item ">
            <a class="nav-link" href="./order-list.php">
              <i class="material-icons">library_books</i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Sales report</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#admin">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#admin">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
 
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
 
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <form action="create_product.php" method="POST" enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-12 mt-2">
                  <div class="form-group">
                          <label class="bmd-label-floating">Product Name</label>
                          <input type="text" class="form-control"  name="pname">
                  </div>
                </div>
                <div class="col-6 mt-2 pr-3">
                  <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                  <input type="number" min="1" class="form-control" name="price">
                  </div>
                </div>
                <div class="col-6 mt-2 pl-3">
                  <div class="form-group">
                          <label class="bmd-label-floating">Quantity</label>
                          <input type="number" min="1" class="form-control" name="quantity">
                  </div>
                </div>
                <div class="col-12 mt-2">
                  <div class="form-group">
                          <label class="bmd-label-floating">Detail</label>
                          <textarea class="form-control" name="detail"></textarea>
                  </div>
                </div>
                <div class="col-12 mt-2 border-dark">
                          <label class="bmd-label-floating">Description</label>
                  <div class="form-group">
                           <textarea class="form-control" name="description"></textarea>
                  </div>
                </div>
                <div class="col-6 mt-2">
                  <select class="form-control" name="cat">
                    <option value="Bed">Bed</option>
                    <option value="Table">Table</option>
                    <option value="Chair">Chair</option>
                  </select>
                </div>
                <div class="col-6 mt-2"> 
                  <input type="file" name="img" class="form-control">
                   </div>
                <div class="col-12 mt-3 text-center">
                  <button type="Submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-2"></div>
          </div>

     
          </div>
        </div>

        </div>
      </div>

    </div>
  </div>
  <!-- ckeditor -->
  <script src="../assets/ckeditor/ckeditor.js"></script> 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });

     CKEDITOR.replace('description');
  </script>
</body>

</html>