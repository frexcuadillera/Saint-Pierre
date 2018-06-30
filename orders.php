<?php

include 'connect.php';
session_start();


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saint Pierre - Orders</title>
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
	</section> 
	


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
		        	<li><a href="profile.php">MY PROFILE</a></li>
					<li class="active"><a href="orders.php">MY ORDERS</a></li>
					<li><a href="logout.php">LOG-OUT</a></li>
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->


	<section id="topic-header">
		<div class="container">
			<div class="row">
					<h4>ORDER Summary: <?php echo $_SESSION['user_fname']." ".$_SESSION['user_lname']; ?></h4>
	<!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->
	
	
	<center>
	<table border='3'>
	<?php
	
	$item = "SELECT * FROM item WHERE item_user_email ='".$_SESSION['user_email']."'";
	$total = 0;
	echo "<table border=3><tr><td>ORDER CODE</td><td>PRODUCT NAME</td><td>PRICE</td><tr>";
	if($query_run_item = mysqli_query($link, $item)){
		while($query_row_item = $query_run_item->fetch_assoc()){
			$item_id = $query_row_item['item_id'];
			$item_product_id = $query_row_item['item_product_id'];
			
			$product = "SELECT * FROM product WHERE product_id ='".$item_product_id."'";
	
			if($query_run_product = mysqli_query($link, $product)){
				while($query_row_product = $query_run_product->fetch_assoc()){
					$item_product_name = $query_row_product['product_name'];
					$item_product_price = $query_row_product['product_price'];
					
					$total = $total + $item_product_price;
			
					echo "<h4><tr><td>Order Code. ".$item_id."</td><td> ".$item_product_name."</td><td>".$item_product_price."</td></tr><h4>";
					
					
			
				}
				
			}
			
		}

	}
	echo"</table>";
	echo "<h4>TOTAL PRICE: ₱ ".$total."</h4>";

?>
	</tabke>
	</center>



</body>
</html>