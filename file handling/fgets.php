<?php 
 
	$file = fopen("data.txt", "r") or die("gagal");
	$data = [];
	while(!feof($file)){
		$data[] = fgets($file);
		
	}
	
	echo "nama : " . $data[0] . "<br />";
	echo "password : " . $data[1] . "<br />";
	echo "umur : " . $data[2] . "<br />";
	

	fclose($file);

?>