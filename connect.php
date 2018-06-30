<?php

    $link = new mysqli("localhost", "root", "", "st_pierre_db");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	
	date_default_timezone_set("Asia/Manila");
?>