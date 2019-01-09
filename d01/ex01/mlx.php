#!/usr/bin/php
<?php
	function iterate($x){
	for ($i=0; $i < 1000; $i++) { 
			echo $x;
		if ($x == 100) {
			echo '\n';
		}	
	}

}	
	$y = "X";
	iterate($y);
?>
