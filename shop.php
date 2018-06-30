<?php

include 'connect.php';
session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saint Pierre - Shop</title>
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
		        	<li ><a href="home.php">HOME</a></li>
					<li class="active"><a href="#">SHOP</a></li>
		        	<li><a href="profile.php">MY PROFILE</a></li>
					<li><a href="orders.php">MY ORDERS</a></li>
					<li><a href="logout.php">LOG-OUT</a></li>					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->




	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Shop</h1>
				</div>	<!-- End of /.col-md-4 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->



	<!-- PRODUCTS Start
    ================================================== -->

	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="products-heading">
						<h2>SEARCH PRODUCTS<br>				
						<form action="shop.php" method="GET">
						<input type='search' name='search'></input>
						<input type='submit' value='SEARCH'></input></h2>
						</form>
					</div>	<!-- End of /.Products-heading -->
					
			
					<div class="product-grid">
					    <ul>
<?php	

	$sql = "SELECT * FROM product";

	if(isset($_GET['search'])){
		$search = $_GET['search'];
		$search_proc = 1;
	}
	
	if(!empty($search) && $category = "all"){
		$sql = "SELECT * FROM product WHERE product_name LIKE '%".$search."%'";
	}
	
	if($query_run = mysqli_query($link,$sql)){
		while($query_row = $query_run->fetch_assoc()){
			$product_id = $query_row['product_id'];
			$product_name = $query_row['product_name'];
			$product_price = $query_row['product_price'];
			$product_img_src = $query_row['product_img_src'];
		
			echo "							
							<li>
					            <div class='products'>
									<a href='#'>
										<img src='products/".$product_img_src."' alt=''>
									</a>
									<a href='#'>
										<h4>".$product_name."</h4>
									</a>
									<p class='price'>Price: ₱".$product_price."</p>
									<div>
										<i>
										<input type='button' onclick='buy".$product_id."()' value='BUY'></input>
										</i>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
			";
		}
	}
?>

					
						</ul>
							
					</div>	<!-- End of /.products-grid -->
				</div>	<!-- End of /.col-md-9 -->
				<div class="col-md-3">
				</div>	<!-- End of /.col-md-3 -->
			
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->

<script>

var function buy1(){
	alert('
	<?php
		$x= "1";	
		$buy_add = "INSERT INTO item (item_user_email,item_product_id) VALUES('".$_SESSION['user_email']."','".$x."')";
		mysqli_query($link, $buy_add);		
	?>
	')
}

var function buy2(){
	alert('
	<?php
		$x= "2";	
		$buy_add = "INSERT INTO item (item_user_email,item_product_id) VALUES('".$_SESSION['user_email']."','".$x."')";
		mysqli_query($link, $buy_add);		
	?>
	')
}


var function buy3(){
	alert('ITEM BOUGHT')
	alert('
	<?php
		$x= "3";	
		$buy_add = "INSERT INTO item (item_user_email,item_product_id) VALUES('".$_SESSION['user_email']."','".$x."')";
		mysqli_query($link, $buy_add);		
	?>
	')
}

var function buy4(){
	alert('ITEM BOUGHT')
	alert('
	<?php
		$x= "4";	
		$buy_add = "INSERT INTO item (item_user_email,item_product_id) VALUES('".$_SESSION['user_email']."','".$x."')";
		mysqli_query($link, $buy_add);		
	?>
	')
}

var function buy5(){
	alert('ITEM BOUGHT')
	alert('
	<?php
		$x= "5";	
		$buy_add = "INSERT INTO item (item_user_email,item_product_id) VALUES('".$_SESSION['user_email']."','".$x."')";
		mysqli_query($link, $buy_add);		
	?>
	')
}

var function buy6(){
	alert('ITEM BOUGHT')
	alert('
	<?php
		$x= "6";	
		$buy_add = "INSERT INTO item (item_user_email,item_product_id) VALUES('".$_SESSION['user_email']."','".$x."')";
		mysqli_query($link, $buy_add);		
	?>
	')
}

var function buy7(){
	alert('ITEM BOUGHT')
	alert('
	<?php
		$x= "7";	
		$buy_add = "INSERT INTO item (item_user_email,item_product_id) VALUES('".$_SESSION['user_email']."','".$x."')";
		mysqli_query($link, $buy_add);		
	?>
	')
}

var function buy8(){
	alert('ITEM BOUGHT')
	alert('
	<?php
		$x= "8";	
		$buy_add = "INSERT INTO item (item_user_email,item_product_id) VALUES('".$_SESSION['user_email']."','".$x."')";
		mysqli_query($link, $buy_add);		
	?>
	')
}

var function buy9(){
	alert("
	<?php
		$x= "9";	
		$buy_add = "INSERT INTO item (item_user_email,item_product_id) VALUES('".$_SESSION['user_email']."','".$x."')";
		mysqli_query($link, $buy_add);		
	?>
	");
}


}

</script>

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