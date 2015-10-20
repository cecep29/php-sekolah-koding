<?php 

	session_start();

	$_SESSION['password'] = "rahasia";

	echo 'password : ' . $_SESSION['password'];


?>

<a href="logout.php">Logout</a>