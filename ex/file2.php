<?php 
	if(!unlink('example.txt.bak')){
		echo "Fail to Delete";		
	}else{
		echo "success!";		
	}
?>