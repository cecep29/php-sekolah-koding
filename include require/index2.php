<?php 

    /*perbedaan include dan require adalah apabila coding terjadi error
    di include coding setelahnya masih dieksekusi, sedangkan pada 
    require coding setelahnya tidak diesksekusi*/
	//include "header.php";
	require "header.php";
	echo "ini halaman kedua";

	//include "footer.php";
	require "footer.php";
?>