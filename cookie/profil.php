<?php 

	echo 'nama : ' . $_COOKIE['nama'];
	setcookie("nama", "cecep", time() - 120);

?>