<?php 
//jika oke di klik
if(isset($_POST['oke'])){
	//jika filenya ada
	if(file_exists("tulis_file2.txt")){
		$file = fopen("tulis_file2.txt", "a+");
		$teks_form = " " . $_POST['text'];
		fwrite($file, $teks_form);

		echo file_get_contents("tulis_file2.txt");
	}
	//file ga ada
	else {
		echo "file tidak ada";
	}
}


?>

<form action="tulis_file2.php" method="post">
	<input type="text" name="text">
	<input type="submit" name="oke" value="oke">
</form>