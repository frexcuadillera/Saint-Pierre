<?php

	include 'connect.php';
	
	$emailtaken = 0;
	
	if(isset($_POST["user_password"])){
		$user_email = $_POST["user_email"];
		$user_password = $_POST["user_password"];
		$user_fname = $_POST["user_fname"];
		$user_lname = $_POST["user_lname"];
		$user_DOB = $_POST["user_DOB"];
		$user_address = $_POST["user_address"];
		$user_contact_no = $_POST["user_contact_no"];

		$sql = "INSERT INTO user (user_email, user_password, user_fname, user_lname,user_DOB, user_address, user_contact_no) 
		VALUES ('".$user_email."', '".$user_password."', '".$user_fname."', '".$user_lname."', '".$user_DOB."', '".$user_address."', '".$user_contact_no."')" or die('email taken');
		
		$email_query = $link->query("SELECT user_email FROM user WHERE user_email = '".$user_email."'");
		
		if($email_query->num_rows > 0){
			$emailtaken = 1;
		}
		else if(mysqli_query($link, $sql)){
			$message = "Account Registered";	
			echo "<script>alert('".$message."');window.location = 'login.php';</script>";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		
		// close connection
		mysqli_close($link); 
    }
?>

<html>

<script src="js/jquery-latest.min.js"></script>
<script>
$(document).ready(function(){

    $("#pwinput").focus();

    $("#pwcheck").click(function(){
        if ($("#pwcheck").is(":checked"))
        {
            $("#pwinput").clone()
            .attr("type", "text").insertAfter("#pwinput")
            .prev().remove();
        }
        else
        {
            $("#pwinput").clone()
            .attr("type","password").insertAfter("#pwinput")
            .prev().remove();
        }
    });
});
</script>
	
<link rel="stylesheet" href="css/bootstrap.min.css">
	
<link rel="stylesheet" href="css/font-awesome.min.css">
	
<link rel="stylesheet" href="css/style.css">
	
<link rel="stylesheet" href="css/responsive.css">

<title>Saint Pierre - Register</title>

<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<center><img src="images/logo.png" alt="logo"></center>
					</a>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->
	
<body>
	

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
		        	<li><a href="login.php">LOG-IN</a></li>
					<li class="active"><a href="#">REGISTER</a></li>									
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->

<!-- REGISTRATION FORM START-->	

<form action="register.php" method="POST">
<center>

<input type="text" name="user_fname" id="user_fname" placeholder="First Name" maxlength="30" required></input><br><br>
<input type="test" name="user_lname" id="user_lname" placeholder="Last Name" maxlength="30" required></input><br><br>
<input type="date" name="user_DOB" id="user_DOB" placeholder="Date of Birth" required></input><br><br>
<input type="text" name="user_address" id="user_address" placeholder="Address" maxlength="100" required></input><br><br>
<input type="tel" name="user_contact_no" id="user_contact_no" placeholder="Contact Number" maxlength="11" required></input><br><br>
<input type="email" name="user_email" id="user_email" placeholder="E-mail" required></input><br><br>
<p>
<input type="password" name="user_password" id="pwinput" placeholder="Password" minlength="8" maxlength="30" required></input><br>
<input type="checkbox" id="pwcheck" />Show Password<br>
</p>

<input type="submit" value="REGISTER"></input>
</center>
</form>
<!-- REGISTRATION FORM END-->	

<?php

if($emailtaken){
		echo "<h4><center><font color='red'>Email Already Used</font></center></h4>";
}

?>
</body>
	
</html>