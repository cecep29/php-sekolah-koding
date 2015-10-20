<?php 

	//nama, nilai, waktu expire
	setcookie("nama" , "cecep", time() + 120);

	echo 'nama : ' . $_COOKIE['nama'];

?>