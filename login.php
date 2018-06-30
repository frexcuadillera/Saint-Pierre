<?php

include 'connect.php';

session_start();

$login_failed = 0;

if(isset($_POST["user_email"])){
	$user_email = $_POST["user_email"];
	$user_password = $_POST["user_password"];	
}

if(!empty($user_email)&&!empty($user_password)){	
	
	$sql = "SELECT * FROM user WHERE user_email = '".$user_email."' AND user_password = '".$user_password."' ";
	
	if($query_run = mysqli_query($link, $sql)){
		$query_num_row = $query_run->num_rows;
		
		if($query_num_row == 1){
						
			$_SESSION['user_email'] = $user_email;
			
			while($query_row = $query_run->fetch_assoc()){
				$user_email = $query_row['user_email'];
				$user_fname = $query_row['user_fname'];
				$user_lname = $query_row['user_lname'];
				$user_DOB = $query_row['user_DOB'];
				$user_address = $query_row['user_address'];
				$user_contact_no = $query_row['user_contact_no'];
			}
			
			$_SESSION['user_fname'] = $user_fname;
			$_SESSION['user_lname'] = $user_lname;
			$_SESSION['user_DOB'] = $user_DOB;	
			$_SESSION['user_address'] = $user_address;
			$_SESSION['user_contact_no'] = $user_contact_no;				
			$_SESSION['login_time'] = date("h:i:sa");
			$_SESSION['login_date'] = date("m/d/Y");
			header('Location: home.php');			
		}
		else{
			$login_failed = 1;
		}
	}
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

<title>Saint Pierre Log-in</title>

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
		        	<li class="active"><a href="#">LOG-IN</a></li>
					<li><a href="register.php">REGISTER</a></li>												
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->
	
	
<form action="login.php" method="POST">
<center>
<input type="email" name="user_email" id="user_email" placeholder="E-mail" required></input><br><br>
<p>
<input type="password" name="user_password" id="pwinput" placeholder="Password" minlength="8" maxlength="30" required></input><br>
<input type="checkbox" id="pwcheck" />Show Password<br>
</p>

<input type="submit" value="LOG-IN"></input>

<?php

if($login_failed == 1){
	echo "<br><br><h4><font color='red'>Wrong Username or Password</font></h4>";
}
?>

</center>
</form>


	


</body>
	
</html>