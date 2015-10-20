<?php 

	$file = file_get_contents("data_web.txt");
	//explode string->array
	$data = explode("|+|", $file);


?>
<h1><?= $data[0];?></h1>
<p><?= $data[1];?></p>
<h4><?= $data[2];?></h4>