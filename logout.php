<?php
session_start();
unset($_SESSION['user_email']);
unset($_SESSION['user_fname']);
unset($_SESSION['user_lname']);
unset($_SESSION['user_time']);
unset($_SESSION['user_date']);

session_destroy();

header("Location: login.php");
exit;
?>