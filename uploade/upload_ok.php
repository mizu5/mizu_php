<html>
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>
<?php 
	ini_set("display_errors","1");
	$uploaddir = 'C:\Apache24\htdocs\phpinfo\exercise\mizu_php\uploade\files\\';
	$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
	echo '<pre>';
	if(move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile)){
		echo "파일이 유효하고, 성공적으로 업로드 되었습니다.";
	}else{
			print "파일 업로드 공격의 가능성이 있습니다.\n";
	}
	echo '자세한 디버깅 정보입니다.:';
	print_r($_FILES);
	print "</pre>";
?>	
	<img src="files/<?php echo $_FILES['userfile']['name']?>" />
	</body>
</html>
