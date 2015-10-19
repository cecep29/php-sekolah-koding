<?php



	if(isset($_POST['nama']) && isset($_POST['kota'])){
		echo 'Nama: ' . $_POST['nama'] . '<br />';
		echo 'Kota: ' . $_POST['kota'] ;

	}
	

?>

<form action="request_post.php" method="post">
	Nama : <input type="text" name="nama"><br/>
	Kota : <input type="text" name="kota"><br/><br/>
	<input type="submit" value="Submit">
</form>