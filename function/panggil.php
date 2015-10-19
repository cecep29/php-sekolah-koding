<?php 

	$nama = "cecep";

	function panggil(){
		global $nama;
		echo "Hai! ";
		return $nama;
	}

	echo panggil();

?>