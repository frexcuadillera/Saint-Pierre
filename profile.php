<?php

include 'connect.php';
session_start();


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saint Pierre - Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- jS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>


</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->
	
	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<p class="contact-action"><i class="fa fa-phone-square"></i>IN CASE OF ANY QUESTIONS, Send an E-mail: <strong>SaintPierrepasteries@gmail.com</strong></p>
				</div>
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
						<li>
							<div class="cart dropdown">
						  		<a data-toggle="dropdown" href="profile.php">
								<?php if(isset($_SESSION['user_fname'])){ 
									echo $_SESSION['user_fname']." ".$_SESSION['user_lname']; 
									} 
								?></a>
							</div>
						</li>						
					</ul>
				</div>
			</div> <!-- End Of /.row -->
		</div>	<!-- End Of /.Container -->
	</section>  <!-- End of /Section -->
	


	<!-- LOGO Start
    ================================================== -->
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="home.php">
						<img src="images/logo.png" alt="logo">
					</a>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->

	


	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		        	<li><a href="home.php">HOME</a></li>
					<li><a href="shop.php">SHOP</a></li>					
		        	<li class="active"><a href="#">MY PROFILE</a></li>
					<li><a href="orders.php">MY ORDERS</a></li>
					<li><a href="logout.php">LOG-OUT</a></li>
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->




	<section id="topic-header">
		<div class="container">
			<div class="row">
				<h4>E-mail: <?php echo $_SESSION['user_email']; ?></h4>
					<h4>First Name: <?php echo $_SESSION['user_fname']; ?></h4>
					<h4>Last Name: <?php echo $_SESSION['user_lname']; ?></h4>
					<h4>Date of Birth: <?php echo $_SESSION['user_DOB']; ?></h4>
					<h4>Address: <?php echo $_SESSION['user_address']; ?></h4>
					<h4>Contact Number: <?php echo $_SESSION['user_contact_no']; ?></h4>
					<h4><button onclick="location.href='profile_edit.php';">EDIT</button></h4>
	<!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->




</body>
</html>