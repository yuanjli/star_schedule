<?php session_start() ?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Start Web</title>
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
            <?php if(!isset($_SESSION['s_id'])) { ?>
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

<!-- FAQs -->
<div id="about">
	<h1> FAQs </h1>

	<iframe src="FAQ.html" width="100%" height="70%" align="middle"></iframe>
	
</div>

<!-- Team Section -->
<div id="about">
  <div class="text-center">
    <div class="container">
      <div class="section-title center">
        <hr>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <h3>Let us know</h3>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf7S1cP151lp5T6rdiqcaEYnnJcH-2FVvlw9GkAGWjs-fsMGw/viewform?embedded=true" width="860" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
    
      </div>
    </div>
  </div>
</div>

<div class="section-title" center align="center" bgcolor=>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3089.5095735727314!2d-86.53006618502229!3d39.2540032334506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886c61ad2d0aea8f%3A0x145f47309862fdc0!2sStar+of+America!5e0!3m2!1sen!2sus!4v1493140265177" width=90% height="600" frameborder="0" style="border:0" ></iframe>
	
</div>



<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact us</h2>
      <hr>
      
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
          <p>321 Awesome Street<br>
            New York, NY 17022</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
          <p>info@companyname.com</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
          <p> +1 800 123 1234<br>
            +1 800 321 4321</p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
      <!--<h3>Leave us a message</h3>
               <form action="./Scripts/contact.php" method="post">

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Send Message</button>
      </form>-->
      
      
      <div >
      <iframe src="temp.html" width="100%" height="10%"></iframe>
      </div>
          <div class="col-md-8 col-md-offset-2">

      <div class="social">
        <h3>Follow us</h3>
        <ul>
          <li><a href="https://www.facebook.com/?stype=lo&jlou=AffpC21eCeiunv9WhW7_i7Dch2-A-CkZy231HvuQVypKniSGU3UlxPUWNDKR2zIOBCza7W69Tk49WUI3KX1h-7uGM_KNaFt-qWab9Di-KO364w&smuh=47016&lh=Ac__SzfxQGrrXL_Q" target="new"><i class="fa fa-facebook">  </i></a></li>
          <li><a href="https://twitter.com/" target="new"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://dribbble.com/" target="new"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="https://github.com/" target="new"><i class="fa fa-github"></i></a></li>
          <li><a href="https://www.instagram.com/?hl=en" target="new"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://www.linkedin.com/" target="new"><i class="fa fa-linkedin"></i></a></li>
        </ul>
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
<script type="text/javascript" src="js/contact_me.js"></script> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
