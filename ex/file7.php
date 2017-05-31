<?php 
	$file = "./readme.txt";
	if(file_exists($file)){
		echo "file is exist";
	}else{
		echo "file is ne exist";
	}
?>