<?php

	//array multi dimensi
	$biodata = array(

					array("Cecep efendi", 31, "IT"),
					array("Effi", 30, "ibu-ibu"),
					array("Razqa", 2, "Masih bocah")

		);

	//cetak array
	//nama array [][]
	for($x=0; $x<count($biodata);$x++){

		for($y=0; $y<count($biodata);$y++){
			echo $biodata[$x][$y] . "<br />";

		}
		echo "<br />";
	}

?>