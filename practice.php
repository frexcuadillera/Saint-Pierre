<?php
include 'connect.php';

$query = "SELECT * FROM user WHERE user_email = '".$user_email."' AND user_password = '".$user_password."' ";

$query_run = mysqli_query($link, $query);
	
	while($query_row = $query_run->fetch_assoc()){
		
		$user_email = $query_row['user_email'];
		$user_password = $query_row['user_password'];
		
		echo $user_email."---------".$user_password."<br>";
	}
?>