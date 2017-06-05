<?php 
	error_reporting(E_ALL ^E_DEPRECATED);
	mysql_connect("localhost","root","a14721472");
	mysql_select_db("mizudb");
	$result = mysql_query("select * from topic where id = ".mysql_real_escape_string($_GET['id']));
	$row = mysql_fetch_array($result);
	
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>   
    <body>
        <form action="./process.php?mode=modify" method="POST">
        	<input type="hidden" name="id" value="<?=$_GET['id']?>">
            <p>제목 : <input type="text" name="title" value="<?= htmlspecialchars($row['title']);?>"></p>
            <p>본문 : <textarea name="description" id="" cols="30" rows="10"><?= htmlspecialchars($row['description']);?>
            </textarea></p>
            <p><input type="submit" /></p>            
        </form>
    </body>
</html>