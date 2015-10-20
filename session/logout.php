<?php 

	session_start();

	session_unset($_SESSION['password']);

	echo 'Password : ' . $_SESSION['password'];

?>