<?php 
//error_reporting(E_ALL ^E_DEPRECATED);
	$host 	= "localhost";
	$id		= "root";
	$pw		= 'a14721472';
	$dbname	= 'mizudb';

	
/*pdo 방식 	
	try{
	$conn = new PDO("mysql:host=$host;dbname=$dbname",$id,$pw);
	echo "접속성공!!";
	switch($_GET['mode']){
		case 'insert' : 
			$stmt = $conn->prepare('INSERT INTO topic (title,description,created) values (:title,:description,now())');
			$stmt->bindParam(':title',$title);
			$stmt->bindParam(':description',$description);
			$title = $_POST['title'];
			$description = $_POST['description'];
			$stmt->execute();
			break;		
	}
	}catch(PDOException $e){
		echo "Error:".$e.getMessage();
	}
*/
//mysql방식
mysql_connect($host,$id,$pw);
mysql_select_db($dbname);
	switch($_GET['mode']){
		case 'insert':
		$sql ="INSERT INTO topic (title,description,created) values ('".mysql_real_escape_string($_POST['title'])."','".mysql_real_escape_string($_POST['description'])."',now())";
		echo $sql;
		if(mysql_query($sql)){
			echo "query 성공";
		}else{
			echo "query 실패";
		}
		break;
	}
?>