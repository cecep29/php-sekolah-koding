<?php 

	$password = "abc123";
	//md5 untuk mengencrypt string
	echo md5($password) . "<br />";

	$test_trim = " test";
	// trim menghilangkan karakter kosong/whitespace
	echo strlen(trim($test_trim)) . "<br />";

	$test_tags = "<a href='facebook.com'>test</a>";

	echo strip_tags($test_tags);


?>