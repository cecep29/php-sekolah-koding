<?php 

	$folder = "tes folder/";

	if(is_dir($folder)) {
		if($of = opendir($folder)){
			while( ($hasil = readdir($of)) !== false){
				if($hasil !="." && $hasil != ".." ){
				echo "nama " . $hasil. " tipe : " . filetype($folder . $hasil) . "<br />";
				}
			}
		}
		closedir($of);
	}else {
		echo "folder tidak ada";
	}

?>