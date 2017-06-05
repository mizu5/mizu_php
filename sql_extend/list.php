<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);
	mysql_connect("localhost","root","a14721472");
	mysql_select_db("mizudb");
		$list_result = mysql_query("select * from topic");
		$row = mysql_fetch_array($list_result);
		//print_r($row);
		
	if(!empty($_GET['id'])){
		$result = mysql_query("select * from topic WHERE id=".mysql_real_escape_string($_GET['id']));
		$content_row = mysql_fetch_array($result);		
	}
?>
<html>
	<head>
	<title></title>
	<style>
		*{margin:0; padding:0;}
		.mWrap{min-width:1000px;overflow:hidden;}
		.sidebar{width:150px; height:100%; border-right:1px solid #333;float:left;padding:10px;}
		.cWrap{padding-left:10px;float:left;width:*;min-width:500px;}
	</style>
	</head>
	<body>
		<div class='mWrap'>
		<div class='sidebar'>
		<ul>
<?php 		
		while($row=mysql_fetch_array($list_result)){
			echo "<li><a href=\"?id={$row['id']}\">".htmlspecialchars($row['title'])."</a></li>";
		}
?>		
<li><a href="input.php">추가</a></li>
		</ul>
		</div>
		<div class='cWrap'>
		<?php			
		if(!empty($content_row)){ 
		?>
		<h1><?=htmlspecialchars($content_row['title']);?></h1>
		<p><?=htmlspecialchars($content_row['description']);?></p>
		<a href="modify.php?id=<?=$content_row['id']?>">수정</a>
		<form method="POST" action="process.php?mode=delete">
		<input type="hidden" name="id" value="<?=$content_row['id']?>">
		<input type="submit" value="삭제" style="cursor:pointer;">
		</form>
		<?php }//if?>
		</div>
		</div>
	</body>
</html>