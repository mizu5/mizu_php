<?php 
	$file = "./readme.txt";
	file_put_contents($file,"Green day - Basket Case");
	
	echo file_get_contents($file);
?>