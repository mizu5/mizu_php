<?php 
	$var = 100;	
	echo gettype($var);
	settype($var,'string');
	echo gettype($var);	
?>
<br/>
<?php 
	define("MagingerZ","로봇트닷");
	echo MagingerZ;
?>
<br/>
<?php 
	$robotArr = array('MagingerZ','TaewonV');
	echo is_Array($robotArr);
?>
<br/>
<?php 
//가변변수~
	$name = "TaewonV";
	$$name = "한국 전통 로봇";
	echo $TaewonV; 
?>
<br/>
<?php 
//연관 배열 foreach활용 뿌려주기
	$robotA = array('name'=>'MazingerZ', 'height'=>'200M', 'weight'=>'50t');
	foreach($robotA as $key=>$value){
		echo $key.":".$value."<br/>"; 
	}
?>
<br/>
<?php 
	list($robot1,$robot2) = $robotArr;
	echo $robot1;
?>
<br/>
<?php 
	echo count($robotA);
?>
<br/>
<?php 
	array_push($robotArr,'ULTRAMAN');
	echo $robotArr[2];
?>
<br/>
<?php 
	array_unshift($robotArr,'IRONMAN');
	echo $robotArr[0];
?>
<br/>
<?php 
	array_shift($robotArr);
	echo $robotArr[0];
?>
<br/>
<?php 
	array_pop($robotArr);
	$count = count($robotArr)-1;
	echo $robotArr[count($robotArr)-1];
?>
<br/>
<?php 
	//합치기
	$arrays = array('SPYDERMAN','superman');
	$myarray = array_merge($robotArr,$arrays);
	print_r($myarray);
?>
