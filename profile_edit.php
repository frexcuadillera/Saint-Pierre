<?php

include 'connect.php';
session_start();

	if(isset($_POST["edit_fname"])){
		$user_fname = $_POST["edit_fname"];
		$user_lname = $_POST["edit_lname"];
		$user_DOB = $_POST["edit_DOB"];
		$user_address = $_POST["edit_address"];
		$user_contact_no = $_POST["edit_contact_no"];

		$sql = "UPDATE user SET user_fname = '".$user_fname."',user_lname = '".$user_lname."',
		user_DOB = '".$user_DOB."',user_address = '".$user_address."',user_contact_no = '".$user_contact_no."' 
		WHERE user_email = '".$_SESSION['user_email']."'";
		
		if(mysqli_query($link, $sql)){
			unset($_SESSION['user_fname']);
			unset($_SESSION['user_lname']);
			unset($_SESSION['user_DOB']);
			unset($_SESSION['user_address']);
			unset($_SESSION['user_contact_no']);
			
			$_SESSION['user_fname'] = $user_fname;
			$_SESSION['user_lname'] = $user_lname;
			$_SESSION['user_DOB'] = $user_DOB;
			$_SESSION['user_address'] = $user_address;
			$_SESSION['user_contact_no'] = $user_contact_no;
			
			$message = "Data Updated";	
			echo "<script>alert('".$message."');window.location = 'profile.php';</script>";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		
		// close connection
		mysqli_close($link);
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Food Code Proudly Presents By Themexpert</title>
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
		        	<li><a href="#">HOME</a></li>
					<li><a href="shop.php">SHOP</a></li>					
		        	<li class="active"><a href="home.php">MY PROFILE</a></li>
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
				<form action="profile_edit.php" method="POST" id="edit-profile">
					<h4>First Name: <input type="text" name="edit_fname" value="<?php echo $_SESSION['user_fname'];?>" required></input></h4>
					<h4>Last Name: <input type="text" name="edit_lname" value="<?php echo $_SESSION['user_lname'];?>" required></input></h4>
					<h4>Date of Birth: <input type="date" name="edit_DOB" value="<?php echo $_SESSION['user_DOB'];?>" required></input></h4>
					<h4>Address: <input type="text" name="edit_address" value="<?php echo $_SESSION['user_address'];?>" required></input></h4>
					<h4>Contact Number: <input type="number" name="edit_contact_no" maxlength="11" value="<?php echo $_SESSION['user_contact_no'];?>" required></input></h4>
					<h4><input type="submit" value="UPDATE" form="edit-profile"></input>
					<button value="CANCEL"><a href="profile.php">CANCEL</a></button></h4>
				</form>
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->




</body>
</html>