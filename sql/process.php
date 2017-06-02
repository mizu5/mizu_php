<?php 	
error_reporting(E_ALL ^ E_DEPRECATED);
	mysql_connect('localhost','root','a14721472');	
	mysql_select_db('mizudb');
	
	switch ($_GET['mode']){
		case 'insert':
			$sql = "insert into topic (title,description,created) values ('".mysql_real_escape_string($_POST['title'])."','".mysql_real_escape_string($_POST['description'])."',now())";
			echo $sql;
			$result = mysql_query($sql);					 
			header("Location: list.php");
			break;
		case 'delete':
			mysql_query('DELETE FROM topic WHERE id = '.mysql_real_escape_string($_POST['id']));		
			header("location:list.php");
			break;
		case 'modify':
			$query = "UPDATE topic SET title = '".mysql_real_escape_string($_POST['title'])."', description = '".mysql_real_escape_string($_POST['description'])."' WHERE id = ".mysql_real_escape_string($_POST['id']);			
			mysql_query($query);			 
			header("location:list.php");
			break;
	}
?>