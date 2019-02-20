<html>
<head>
    <title>Online Shopping :: Being your life easier</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>

<body>

<!-- Sidebar -->
<div id ="wrapper">
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">product1</a>
        </li>
        <li>
            <a href="#">product2</a>
        </li>
        <li>
            <a href="#">product3</a>
        </li>
        <li>
            <a href="#">product4</a>
        </li>
        <li>
            <a href="#">product5</a>
        </li>
        <li>
            <a href="#">product16</a>
        </li>
        <li>
            <a href="#">product7</a>
        </li>
        <li>
            <a href="#">product18</a>
        </li>
    </ul>
</div>
</div>


<div id="page-contain-wrapper">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <div class="col-lg-3">
        <div class="col-lg-1">

                <button class="btn btn-dark" type="submit"><span class="navbar-toggler-icon"><a href="#"  class="btn" id="menu-toggle"></a></span></button>

        </div>
        <div class="col-lg-11">
            <a class="navbar-brand" href="#">Online Shopping</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

    </div>

  <div class="col-lg-6">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-light my-sm-0" type="submit">Search</button>
        </form>
    </div>
  </div>
    <div class="col-lg-3">

        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sign Up</a>
            </li>

        </ul>

    </div>


</nav>

</div>


<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("menu-displayed");
    });
</script>

</body>

</html>




