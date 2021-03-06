<?php session_start()?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Star Web</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="preloader">
  <div id="status"> <img src="img/preloader.gif" height="64" width="64" alt=""> </div>
</div>

<!-- Navigation -->
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      <a class="page-scroll" href="index.php"> <img src="img/Logo.png" width="160" class="img-circle"> </a></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-main-collapse">
      <ul class="nav navbar-nav">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
        <li class="hidden"> <a href="#page-top"></a> </li>
        <li> <a class="page-scroll" href="index.php#vehicle">Vehicles</a> </li>
        <li> <a class="page-scroll" href="./Scripts/bookNow.php">Book Now</a> </li>
        <li> <a class="page-scroll" href="index.php#driver">Drivers</a> </li>
        <li> <a class="page-scroll" href="index.php#services">Memories</a> </li>
        <li> <a class="page-scroll" href="index.php#about">About</a> </li>
        <li> <a class="page-scroll" href="contact.php">Contact</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> <img src="img/profile.png" width="23"></a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="sign_up.php">Sign up</a></li>
            <?php if(!isset($_SESSION['s_id'])){ ?> 
            <li><a href="log_in.php">Log in</a></li>
            <?php } else { ?>
            <li><a href="./Scripts/logout.php">Log Out</a></li>
            <?php } ?>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container --> 
</nav>


<!-- Sign up Section -->

<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    
    
    <div id="signup">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Sign up</h2>
      <hr>
    </div>
    <div class="row">
      <div class="center">
        <form action="./Scripts/signup.php" method="post">
          <ul style="list-style:none;">
            <li>
              <label for="fname">First Name</label>
              <br>
              <input type="text" id="fname" name="fname" required>
            </li>
            <li>
              <label for="lname">Last Name</label>
              <br>
              <input type="text" id="lname" name="lname" required>
            </li>
            <li>
              <label for="email" >E-mail</label>
              <br>
              <input type="text" id="email" name="email" required>
            </li>
            <li>
              <label for="passwd" >Password</label>
              <br>
              <input type="password" id="passwd" name="passwd" required>
            </li>
            <li>
              <label for="street" >Street</label>
              <br>
              <input type="text" id="street" name="street" required>
            </li>
            <li>
              <label for="city" >City</label>
              <br>
              <input type="text" id="city" name="city" required>
            </li>
            <li>
              <label for="zip" >Zip</label>
              <br>
              <input type="text" id="zip" name="zip" required>
            </li>
            <li>
              <label for="phno" >Phone Number</label>
              <br>
              <input type="text" id="phno" name="phno" required>
            </li>
            <input type="submit" id="submit_button" value="Submit">
          </ul>
        </form>
        <br>
      </div>
    </div>
  </div>
</div>


<div id="footer">
  <div class="container">

    <p>Copyright &copy; Star Booking Design By <a href="http://www.templategarden.com" rel="nofollow">Team 3</a></p>

  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jquery.parallax.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 


<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
