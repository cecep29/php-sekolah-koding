<?php 

	$file = fopen("tulis.txt", "a+");

	fwrite($file, " tambahan text");
	rewind($file);
	$hasil = fgets($file);
	echo $hasil;
	fclose($file);

?>