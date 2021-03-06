<?php session_start() ?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Star Web</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

	<!-- Stylesheet
    ================================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
<!---->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<div id="preloader">
		<div id="status"> <img src="img/preloader.gif" height="64" width="64" alt=""> </div>
	</div>

	<!-- Navigation -->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
				<a class="page-scroll" href="index.php"> <img src="img/Logo.png" width="160" class="img-circle"> </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-main-collapse">
				<ul class="nav navbar-nav">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="hidden"> <a href="#page-top"></a> </li>

					<!--<li> <a class="page-scroll" href="#services">Services</a> </li>-->
					<li> <a class="page-scroll" href="#vehicle">Vehicles</a> </li>
					<li> <a class="page-scroll" href="./Scripts/bookNow.php">Book Now</a> </li>
					<li> <a class="page-scroll" href="#driver">Drivers</a> </li>
					<li> <a class="page-scroll" href="#services">Memories</a> </li>
					<li> <a class="page-scroll" href="#about">About</a> </li>
					<li> <a class="page-scroll" href="contact.php">Contact</a> </li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"> <img src="img/profile.png" width="23"></a>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="sign_up.php">Sign up</a>
							</li>
							<?php if(!isset($_SESSION['s_id'])) { ?>
							<li><a href="log_in.php">Log in</a>
							</li>
							<?php } else { ?>
							<li><a href="./Scripts/logout.php">Log Out</a>
							</li>
							<li><a href="delete.html">Delete</a></li>
							<?php } ?>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Header -->
	<div id="intro">
		<div class="intro-body">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<h1><span class="brand-heading">Star of America</span></h1>
						<p class="intro-text">We are going places </p>
						<a href="#vehicle" class="btn btn-default page-scroll">Get Started</a> </div>
				</div>
			</div>
		</div>
	</div>

	<!-- Vehicle Section -->
	<div id="vehicle" class="text-center">
		<div class="container">
			<!-- Container -->
			<div class="section-title text-center center">
				<h2>Vehicle Types</h2>
				<hr>
				<div class="clearfix"></div>
				<p>Today’s motor coach has become both fuel-efficient and environmentally sound.</p>
			</div>
			<div class="categories">
				<ul class="cat">
					<li>
						<ol class="type">
							<li><a href="#" data-filter="*" class="active">All types</a>
							</li>
							<li><a href="#" data-filter=".a48">48-56 Charters</a>
							</li>
							<li><a href="#" data-filter=".b24">24-34 Buses</a>
							</li>
							<li><a href="#" data-filter=".c15">9-16 Vans</a>
							</li>
						</ol>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="row">
				<div class="portfolio-items">
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 a48">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="img/portfolio/1DeluxeMotorCoach.jpg" title="Description: 56 seats" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Deluxe Motor Coach</h4>
										<p>56 seats</p>
									</div>
									<img src="img/portfolio/1DeluxeMotorCoach.jpg" class="img-responsive" alt="Delux Motor Coach"> </a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 a48">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="img/portfolio/2luxuryCoach.jpg" title="Description: 48 seats" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Luxury Coarch</h4>
										<p>48 Seats</p>
									</div>
									<img src="img/portfolio/2luxuryCoach.jpg" class="img-responsive" alt="Luxury Coach"> </a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 a48">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="img/portfolio/3Megabus.jpg" title="Description: 52 seats" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Mega Bus</h4>
										<p>52 Seats</p>
									</div>
									<img src="img/portfolio/3Megabus.jpg" class="img-responsive" alt="Mega Bus"> </a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 b24">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="img/portfolio/4MiniBus.jpg" title="Description: 28 seats" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Mini Bus</h4>
										<p>28 Seats</p>
									</div>
									<img src="img/portfolio/4MiniBus.jpg" class="img-responsive" alt="Mini Bus"> </a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 b24">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="img/portfolio/5schoolBus.jpg" title="Description: School Bus 32 seats" rel="prettyPhoto">
									<div class="hover-text">
										<h4>School Bus</h4>
										<p>32 Seats</p>
									</div>
									<img src="img/portfolio/5schoolBus.jpg" class="img-responsive" alt="School Bus"> </a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 b24">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="img/portfolio/6Partybus.jpg" title="Description: 32 Seats" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Party Bus</h4>
										<p>32 Seats</p>
									</div>
									<img src="img/portfolio/6Partybus.jpg" class="img-responsive" alt="Party Bus"> </a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 dapibus c15">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="img/portfolio/7sprinterVan.jpg" title="Description: 16 seats" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Sprinter</h4>
										<p>16 Seats</p>
									</div>
									<img src="img/portfolio/7sprinterVan.jpg" class="img-responsive" alt="Sprinter"> </a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 c15">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="img/portfolio/8FordTransit.jpg" title="Description: 11 seats" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Ford Transit</h4>
										<p>11 seats</p>
									</div>
									<img src="img/portfolio/8FordTransit.jpg" class="img-responsive" alt="Ford Transit"> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<button type="button" class="btn btn-primary"><a href="Scripts/bookNow.php">Search and Booking</a></button>
			</div>
		</div>
	</div>

	<!-- Driver Section -->
	<div id="driver" class="text-center">
		<div class="container">
			<div class="section-title center">
				<h2>Meet the drivers</h2>
				<hr>
				<p>We have ten professional drivers.</p>
			</div>
			<div id="row">
				<div class="col-xs-6 col-md-3 col-sm-6">
					<div class="thumbnail"> <img src="img/drivers/01.jpg" alt="..." class="img-thumbnail team-img">
						<div class="caption">
							<h3>Jessica Wally</h3>
							<p>Rating: 3.5</p>
							<p>Experience: 15 yrs </p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-sm-6">
					<div class="thumbnail"> <img src="img/drivers/02.jpg" alt="..." class="img-thumbnail team-img">
						<div class="caption">
							<h3>Mike Sloan</h3>
							<p>Rating: 4.6</p>
							<p>Experience: 7 yrs</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-sm-6">
					<div class="thumbnail"> <img src="img/drivers/03.jpg" alt="..." class="img-thumbnail team-img">
						<div class="caption">
							<h3>Michele Doe</h3>
							<p>Rating: 4.1</p>
							<p>Experience: 10 yrs</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-sm-6">
					<div class="thumbnail"> <img src="img/drivers/04.jpg" alt="..." class="img-thumbnail team-img">
						<div class="caption">
							<h3>Linda Evans</h3>
							<p>Rating: 3.4</p>
							<p>Experience: 11 yrs</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-sm-6">
					<div class="thumbnail"> <img src="img/drivers/05.jpg" alt="..." class="img-thumbnail team-img">
						<div class="caption">
							<h3>Mario Puzo</h3>
							<p>Rating: 4.8</p>
							<p>Experience: 12 yrs </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-sm-6">
				<div class="thumbnail"> <img src="img/drivers/06.jpg" alt="..." class="img-thumbnail team-img">
					<div class="caption">
						<h3>John Smith</h3>
						<p>Rating: 3</p>
						<p>Experience: 6 yrs</p>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-sm-6">
				<div class="thumbnail"> <img src="img/drivers/07.jpg" alt="..." class="img-thumbnail team-img">
					<div class="caption">
						<h3>Michael Crichton</h3>
						<p>Rating: 4.3</p>
						<p>Experience: 20 yrs</p>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-sm-6">
				<div class="thumbnail"> <img src="img/drivers/08.jpg" alt="..." class="img-thumbnail team-img">
					<div class="caption">
						<h3>Tom Hiddleston</h3>
						<p>Rating: 3.5</p>
						<p>Experience: 3 yrs</p>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-sm-6">
				<div class="thumbnail"> <img src="img/drivers/09.jpg" alt="..." class="img-thumbnail team-img">
					<div class="caption">
						<h3>Marilyn Monroe</h3>
						<p>Rating: 2.9</p>
						<p>Experience: 1 yr</p>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-sm-6">
				<div class="thumbnail"> <img src="img/drivers/10.jpg" alt="..." class="img-thumbnail team-img">
					<div class="caption">
						<h3>Kelly Mathews</h3>

						<p>Rating: 4</p>
						<p>Experiance: 4 yrs</p>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-sm-6">
				<div class="thumbnail"> <img src="img/drivers/11.jpg" alt="..." class="img-thumbnail team-img">
					<div class="caption">
						<h3>Leo Mathew</h3>
						<p>Rating: 2</p>
						<p>Experience: 1 yr </p>

					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-sm-6">
				<div class="thumbnail"> <img src="img/drivers/12.jpg" alt="..." class="img-thumbnail team-img">
					<div class="caption">
						<h3>John Deree</h3>
						<p>Rating: 3</p>
						<p>Experience: 1 yr</p>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Memories Section -->
	<div id="services" class="text-center">
		<div class="container">
			<div class="section-title center">
				<h2>Some memories</h2>
				<hr>
			</div>
			<div class="space"></div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="service"> <i class="fa fa-cogs"></i> <img src="img/420-Coach-travel-passengers-420x0.jpg" style="width: 200px;height: 150px"> </div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service"> <i class="fa fa-send-o"></i> <img src="img/baz-bus-day-tour.jpg" style="width: 200px; align-content: center"> </div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service"> <i class="fa fa-puzzle-piece"></i> <img src="img/groupbus.jpg" style="width: 200px; height: 150px"> </div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service"><i class="fa fa-briefcase"></i> <img src="img/busbud-coachbus1.jpg" style="width: 200px;height: 150px"> </div>
				</div>
			</div>
			<div class="space"></div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="service"><i class="fa fa-trophy"></i> <img src="img/MooseOnBus-363x240.png" style="width: 200px;height: 150px"> </div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service"><i class="fa fa-diamond"></i> <img src="img/world-cup-bus-2.jpg" style="width: 200px;height: 150px"> </div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service"><i class="fa fa-bullhorn"></i> <img src="img/m_1285411g.jpg" style="width: 200px;height: 150px"> </div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service"><i class="fa fa-heart"></i> <img src="img/images.jpeg" style="width: 200px;height: 150px"> </div>
				</div>
			</div>
		</div>
	</div>

	<!-- About Section -->
	<div id="about">
		<div class="container">
			<div class="section-title text-center center">
				<h2>About us</h2>
				<hr>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img src="img/aboutpic.jpg" class="img-responsive">
				</div>
				<div class="col-md-4">
					<img src="img/aboutpic2.jpg" class="img-responsive">
				</div>

			</div>
			<div class=row>
				<div class="col-md-4">
					<div class="about-text">
						<h4>Learn More About Us</h4>
						<p>Star of America began in 2004 with the acquisition of Star of Indiana. We later merged with Illini Swallow Lines, I-V Coaches, Four Star Charter, and Ashley Travel to form a reliable company with great service. Staff from all five companies have joined together to create the staff of Star of America. </p>
						<p> At Star of America, we focus on chartering coaches all over the United States and Canada. We have a newer, larger, and more modern fleet including 21, 23, 47, 54, and 55 passenger coaches. We are committed to providing the best service with the best rates. Call today for a free price quote!</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="about-text">
						<h4>Go Green!</h4>
						<p>Today’s motor coach has become both fuel-efficient and environmentally sound. On a per passenger basis, a modern motor coach is among the cleanest modes of transportation in the world. One single coach can replace up to 55 cars on the highway. And with up to 184 passenger miles per gallon, it’s 84% more fuel efficient than a passenger in a hybrid car. So if you want to make a positive impact on our environment, get on the bus.</p>
						<ul>
							<li>Star of America has over 50 years experience.</li>
							<li>Transportation services for groups of all sizes.</li>
							<li>Star of America’s standards go miles beyond the minimum.</li>
							<li>We’re always driving for the safest measures</li>
						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials Section -->
	<div id="testimonials" class="text-center">
		<div class="container">
			<div class="section-title center">
				<h2>What our clients say</h2>
				<hr>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row testimonials">
						<div class="col-sm-4">
							<blockquote><i class="fa fa-quote-left"></i>
								<p>Dear Star of America, We just wanted to Thank You for providing the busses for our October semi-fromal. We had a great time and we owe a huge part of it to you. Your drivers were excellent and we look forward to working with you again.<br>
								</p>
								<br>
								<p>Your communication, patience and excellent organization were greatly appreciated. We appreciate your driver’s patience in packing a lot into a short time while we were in town.</p>
								<br>
								<div class="clients-name">
									<p>John Doe, ABC company</p>
								</div>
								<img src="img/testimonials/01.jpg" alt="..."> </blockquote>
						</div>
						<div class="col-sm-4">
							<blockquote><i class="fa fa-quote-left"></i>
								<p>Star of America, Thank you so very much for asking me to join the FAM tour to Pigeon Forge. As a "Rookie"S in the tour business I truly learned so much both from the many hosts and especially the others on the bus. It’s been great working with Star of America this past few months and have plans for my 2009 trips.</p>
								<br>
								<div class="clients-name">
									<p>Jane Doe, XYZ Company</p>
								</div>
								<div>
									<img src="img/testimonials/02.jpg" alt="..."> </blockquote>
							</div>
							<div class="col-sm-4">
								<blockquote><i class="fa fa-quote-left"></i>
									<p>Your communication, patience and excellent organization were greatly appreciated. We appreciate your driver’s patience in packing a lot into a short time while we were in town.</p>
									<br>
									<div class="clients-name">
										<p>Brian Smith, QWERTY Company</p>
									</div>
									<div>
										<img src="img/testimonials/03.jpg" alt="..."> </blockquote>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>

			<!-- Contact Section -->
			<!--deleted -->

			<div id="footer">
				<div class="col-md-8 col-md-offset-2">
					<div class="social">
						<h3>Follow us</h3>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-github"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-instagram"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="container">
					<p>Copyright &copy; Star Booking. Design by <a href="http://www.google.com" rel="nofollow">Team 3</a>
					</p>

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