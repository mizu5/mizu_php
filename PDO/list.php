<?php 
	$dbh = new PDO('mysql:host=localhost;dbname=mizudb','root','a14721472',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
	$stmt = $dbh->prepare("select * from topic");
	$stmt->execute();
	$list = $stmt->fetchAll();
			
	if(!empty($_GET['id'])){
		$stmt = $dbh->prepare('SELECT * FROM topic WHERE id=:id');
		$stmt->bindParam(':id',$id,PDO::PARAM_INT);
		$id = $_GET['id'];
		$stmt->execute();
		$topic = $stmt->fetch();		
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
		foreach($list as $name=>$row){
			echo "<li><a href=\"?id={$row['id']}\">".htmlspecialchars($row['title'])."</a></li>";
		}
?>		
<li><a href="input.php">추가</a></li>
		</ul>
		</div>
		<div class='cWrap'>
		<?php			
		if(!empty($topic)){ 
		?>
		<h1><?=htmlspecialchars($topic['title']);?></h1>
		<p><?=htmlspecialchars($topic['description']);?></p>
		<a href="modify.php?id=<?=$topic['id']?>">수정</a>
		<form method="POST" action="process.php?mode=delete">
		<input type="hidden" name="id" value="<?=$topic['id']?>">
		<input type="submit" value="삭제" style="cursor:pointer;">
		</form>
		<?php }//if?>
		</div>
		</div>
	</body>
</html>