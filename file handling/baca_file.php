<?php 
	//readfile
	/*$file = readfile("file.txt");
	echo $file;*/

	//fread
	$file = fopen("file.txt", "r") or 
	die("ga bisa buka file");

	$hasil = fread($file, filesize("file.txt"));

	echo $hasil;

	fclose($file);



?>