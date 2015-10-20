<?php 

	$sumber = array("sekolah", "koding");
	$akhir = array("tempat", "ngoding");
	$text = "sekolah koding";

	//strlen menghitung banyak karakter di string
	echo (strlen($text)) . "<br />";

	//str_shuffle untuk mengacak string 
	echo (str_shuffle($text)) . "<br />";

	//str_replace mengganti kata/karakter di string dengan kata baru
	echo (str_replace("sekolah", "tempat", $text))  . "<br />";

	echo (str_replace($sumber, $akhir, $text));
?>