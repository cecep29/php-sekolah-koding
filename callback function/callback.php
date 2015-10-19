<?php 

	$nyanyi = function($test){
		echo 'la lala';
		echo $test;
	};

	function testSuara($test, $callback){
		echo $test;
		call_user_func($callback, "selesai");
	}

	testSuara("ehm ehm", $nyanyi);

?>