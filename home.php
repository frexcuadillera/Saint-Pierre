<?php

include 'connect.php';
session_start();

?>

<!doctype html>
<html lang="en">

<head>
	
<meta charset="UTF-8">
	
<title>St. Pierre - Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	
<!-- Fonts -->
	
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	
<!-- Css -->
	
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	
<link rel="stylesheet" href="css/owl.carousel.css">
	
<link rel="stylesheet" href="css/owl.theme.css">
	
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

<script src="js/confirm_password.js" type="text/javascript"></script>

<script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>


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
		</div>
<!-- End Of /.Container -->


<!-- MODAL Start
    	================================================== -->

		
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			

		
</div>	
	
</section> 
 <!-- End of /Section -->
	


	
<!-- LOGO Start
    ================================================== -->
	
	
<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">
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
		        	<li class="active"><a href="#">HOME</a></li>
					<li><a href="shop.php">SHOP</a></li>	
		        	<li><a href="profile.php">MY PROFILE</a></li>
					<li><a href="orders.php">MY ORDERS</a></li>
					<li><a href="logout.php">LOG-OUT</a></li>
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->


	<!-- SLIDER Start
    ================================================== -->


	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="slider" class="nivoSlider">				    	
					<img src="images/slider-pizza.jpg" alt="" />
				    <img src="images/slider-pastry.jpg" alt=""/>
				    <img src="images/slider-donut.jpg" alt="" />
					<img src="images/slider-cake.jpg" alt="" />
					</div>	<!-- End of /.nivoslider -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of Section -->


	
	<!-- FEATURES Start
    ================================================== -->

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class="fa fa-ambulance"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Free Shipping</h4>
						    	<p>We Ship Goods Nationwide!</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
								<i class=" fa fa-foursquare"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Affordable price</h4>
						    	
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class=" fa fa-phone"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Call Us</h4>
						    	<p>Call Our Hotline For Free Delivery!</p>
						  </div>	<!-- End of /.media-body -->
						</div>	<!-- End of /.media -->
					</div>	<!-- End of /.block -->
				</div> <!-- End of /.col-md-4 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of section -->



	<!-- CATAGORY Start
    ================================================== -->

	<section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>OUR FOOD CATEGORIES</h2>
						</div>	
						<div class="row">
						  	<div class="col-sm-6 col-md-4">							    
								<div class="thumbnail">
							    	<a class="catagotie-head" href="shop.php?search=pizza">
										<img src="images/category-image-pizza.jpg" href="shop.php?search=pizza" alt="...">
										<h3>Pizza</h3>
									</a>
							      	<div class="caption">
							        	<p></p>
							        	<p>
							        		<a href="shop.php?search=pizza" class="btn btn-default btn-transparent" role="button">
							        			<span>Check Items</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="shop.php?search=donut">
										<img src="images/category-image-donut.jpg" alt="...">
										<h3>Donut</h3>
									</a>
							      	<div class="caption">							        	
							        	<p>
							        		<a href="shop.php?search=donut" class="btn btn-default btn-transparent" role="button">
							        			<span>Check Items</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="shop.php?search=cake">
										<img src="images/category-image-cake.jpg" alt="...">
										<h3>Cake</h3>
									</a>
							      	<div class="caption">
								        <p></p>
								        <p>
								        	<a href="shop.php?search=cake" class="btn btn-default btn-transparent" role="button">
								        		<span>Check Items</span>
								        	</a>
								        </p>
								    </div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="shop.php?search=bread">
										<img src="images/category-image-bread.jpg" alt="...">
										<h3>Bread</h3>
									</a>
							      	<div class="caption">
								        <p></p>
								        <p>
								        	<a href="shop.php?search=bread" class="btn btn-default btn-transparent" role="button">
								        		<span>Check Items</span>
								        	</a>
								        </p>
								    </div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->										
						</div>	<!-- End of /.row -->					
					</div>	<!-- End of /.block --> 				
				</div>	<!-- End of /.col-md-12 -->			
			</div>	<!-- End of /.row -->		
		</div>	<!-- End of /.container -->	
	</section>	<!-- End of Section -->
	
	
		<!-- CALL TO ACTION Start
    ================================================== -->

	<section id="call-to-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>Our Partners</h2>
						</div>
					</div>	<!-- End of /.block -->
					<div id="owl-example" class="owl-carousel">
						<div> <img src="images/company-1.png" alt=""></div>
						<div> <img src="images/company-2.png" alt=""></div>
						<div> <img src="images/company-3.png" alt=""></div>
						<div> <img src="images/company-4.png" alt=""></div>
						<div> <img src="images/company-5.png" alt=""></div>
						<div> <img src="images/company-6.png" alt=""></div>
						<div> <img src="images/company-8.png" alt=""></div>
						<div> <img src="images/company-9.png" alt=""></div>
					</div>	<!-- End of /.Owl-Slider -->
				</div>	<!-- End of /.col-md-12 -->
			</div> <!-- End Of /.Row -->
		</div> <!-- End Of /.Container -->
	</section>	<!-- End of Section -->
	
	

	<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block clearfix">
						<a href="#">
							<img src="images/footer-logo.png" alt="">
						</a>
						<p>
							Saint Pierre is a pastry shop which sells the best delicacies.Saint Pierre is serving your tongue since 2018!
						</p>
						<h4 class="connect-heading">CONNECT WITH US</h4>
						<ul class="social-icon">
							<li>
								<a class="facebook-icon" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="plus-icon" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li>
								<a class="twitter-icon" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="pinterest-icon" href="#">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li>
								<a class="linkedin-icon" href="#">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>	<!-- End Of /.social-icon -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of /.Col-md-4 -->
				<div class="col-md-4">
					<div class="block">
						<h4>GET IN TOUCH</h4>
						<p ><i class="fa  fa-map-marker"></i> <span>St. Pierre d.o.o.,</span>666 Miramonte Subd. Lucban, Quezon</p>
						<p> <i class="fa  fa-phone"></i> <span>Phone:</span> +(042) 317-6666 </p>

						<p> <i class="fa  fa-mobile"></i> <span>Mobile:</span> (+639)502734618</p>
 
						<p class="mail"><i class="fa  fa-envelope"></i>Email: <span>SaintPierrepasteries@gmail.com</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
				<div class="col-md-4">
					<div class="block">
						<h4>UPCOMING ITEMS</h4>
						<div class="media">
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/single-product.png" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item-2.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/images 1.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/images 2.jpg" alt="...">
						  	</a>
						</div>	<!-- End Of /.media -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
			</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->
		


	<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="cash-out pull-left">
							<li>
								<a href="#">
									<img src="images/American-Express.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/PayPal.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/Maestro.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/Visa.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/Visa-Electron.png" alt="">	
								</a>
							</li>
						</ul>
						<p class="copyright-text pull-right">Saint Pierre @2018 All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>