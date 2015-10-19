<?php 
	
	// isset cek nama &  kota sudah diisi di form
	if(isset($_GET['nama']) && $_GET['kota'] ){
		echo 'nama sudah diisi' ."<br />";
		echo 'Nama yg dikirim : '. $_GET['nama'] . '<br/>';
		echo 'kota sudah diisi' . '<br />';
		echo 'Kota : ' . $_GET['kota'];
	}
	
?>


<form action="request_get.php" method="get">
	<label>Nama</label>
	<input type="text" name="nama">
	<br />
	<label>Kota</label>
	<input type="text" name="kota">
	<br />
	<input type="submit" name="simpan" value="Simpan">
</form>