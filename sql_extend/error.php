<?php 
	error_reporting(E_ALL ^E_DEPRECATED);
	var_dump(mysql_connect("localhost","root","a14721472"));
	var_dump(mysql_select_db("mizudb"));
	var_dump(mysql_query("select * Fro topic"));
	
	echo mysql_error();
	echo "<br>";
	echo mysql_errno();
?>