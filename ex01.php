<html>
<head><title>PHP정리</title>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="./js/highlight.js-master/src/styles/androidstudio.css">
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="  crossorigin="anonymous"></script>
<script src="js/highlight.js-master/src/highlight.js"></script>
<scritp src="js/highlightjs-line-numbers.js"></scritp>
<style>
	*{font-family: 'Roboto', sans-serif;}
	h2{border-bottom:2px solid #333; padding-bottom:0.5em; display:inline-block; margin-bottom:0em;}	
	div.ex{background-color:#ddd;padding:0.3em; margin:0 2em;}
	div.ex .code:before{content:"CODE"; display:inline-block;background-color:#F00;color:#fff;font-size:0.8em;padding:0.2em 0.5em 0.4em;border-radius:1em;}
	div.ex .result:before{content:"RESULT"; display:inline-block;background-color:#56aee3;color:#fff;font-size:0.8em;padding:0.2em 0.5em 0.4em;border-radius:1em;}
	div.ex .result{border-top:1px solid #fff;padding-top:1em;}	
	div.ex p{padding-left:20px;}
	div.ex > p > p{padding-left:30px;}
</style>
<body>
	<h2>var_dump</h2>
	<ul><li>변수의 타입까지 출력해줌</li></ul>	
	<div class="ex">
	<div class="code">
	<pre><code class="php">var_dump(6.1);</code></pre>
	</div>
	<div class="result">
	<pre><code class="php">	
	<?php var_dump(6.1);?>
	</code></pre>	
	</div>
	</div>	
	
	<h2>echo</h2>
	<ul><li>출력해줌</li></ul>
	<div class="ex">
	<div class="code">
	<pre><code class="php"> echo "그는 \"안녕하세요 라고 말했다\"";</code></pre>
	</div>
	<div class="result">
	<pre><code class="php"><?php echo "그는 \"안녕하세요 라고 말했다\""; ?>
	</code></pre>
	</div>
	</div>	

	<h2>define</h2>
	<ul><li>상수 선언</li></ul>
	<div class="ex">
	<div class="code">
	<pre><code class="php">define('TITLE','PHP Tutorial');
echo TITLE;<br></code></pre>
	</div>
	<div class="result">
	<pre><code class="php">define('TITLE','PHP Tutorial');
echo TITLE.";</code></pre>
	</div>
	</div>
	
	<h2>gettype/settype</h2>
	<ul><li>변수의 데이터형 검사/변경</li></ul>
	<div class="ex">
	<div class="code">
	<pre><code class="php">
	$a = 100;
	echo gettype($a);
	settype($a,'double');
	gettype($a);
	</code></pre>
	</div>
	<div class="result">
	<pre><code class="php">	
	<?php
	$a = 100;
	echo gettype($a);
	echo "<br>";
	settype($a,'double');
	echo gettype($a);
	?>
	</code></pre>
	</div>
	</div>
	<h2>is_array</h2>
	<ul>
	<li>bool is_array ( mixed $var )</li>
	<li>주어진 변수가 배열인지 확인</li>
	<li>var가 array이면 true, 아니면 false를 반환</li>
	</ul>
	<div class="ex">
	<div class="code">
	<pre><code class="php">
$yes = array('this', 'is', 'an array');
echo is_array($yes) ? 'Array' : 'not an Array';
echo "\n";
$no = 'this is a string';
echo is_array($no) ? 'Array' : 'not an Array';
	</code></pre>
	</div>
	<div class="result">
	<pre><code class="php">
<?php 
$yes = array('this', 'is', 'an array');

echo is_array($yes) ? 'Array' : 'not an Array';
echo "\n";

$no = 'this is a string';

echo is_array($no) ? 'Array' : 'not an Array';
?>	
	</code></pre>
	</div>
	</div>	
	
	<h2>가변변수</h2>
	<ul>
	<li>변수의 이름을 변수로 변경</li>
	<li>$$로 변수를 선언하여 변수이름을 변수로 변경한다.</li>
	</ul>
	<div class="ex">
	<div class="code">
	<pre><code class="php">
$name = "robot";
$$name = "Mazinger Z";
echo $robot;
	</code></pre>
	</div>
	<div class="result">
	<pre><code class="php">
<?php 
$name = "robot";
$$name = "Mazinger Z";
echo $robot;
?>	
	</code></pre>
	</div>
	</div>	
	
	<h2>비교 연산자(===)</h2>
	<ul>
	<li>좌항과 우항이 정확하게 같다. 데이터 타입까지</li>
	<li>var가 array이면 true, 아니면 false를 반환</li>
	</ul>
	<div class="ex">
	<div class="code">
	<pre><code class="php">
echo "1 == '1' : ";
var_dump(1 == '1');
echo "<br />1 === '1' : ";
var_dump(1 === '1');
	</code></pre>
	</div>
	<div class="result">
	<pre><code class="php">
<?php 
echo "1 == '1' : ";
var_dump(1 == '1');
echo "<br />1 === '1' : ";
var_dump(1 === '1');
?>	
	</code></pre>
	</div>
	</div>	
	
	<h2>$_GET</h2>
	<ul>
	<li>GET방식으로 데이터를 받음</li>
	</ul>
	<div class="ex">
	<div class="code">
	<pre><code class="php">
echo $_GET['id'];
	</code></pre>
	</div>
	<div class="result">
	<pre><code class="php">
<?php 
echo $_GET['id'];
?>	
	</code></pre>
	</div>
	</div>		

	<h2>비교 연산자(===)</h2>
	<ul>
	<li>좌항과 우항이 정확하게 같다. 데이터 타입까지</li>
	<li>var가 array이면 true, 아니면 false를 반환</li>
	</ul>
	<div class="ex">
	<div class="code">
	<pre><code class="php">
echo "1 == '1' : ";
var_dump(1 == '1');
echo "<br />1 === '1' : ";
var_dump(1 === '1');
	</code></pre>
	</div>
	<div class="result">
	<pre><code class="php">
<?php 
echo "1 == '1' : ";
var_dump(1 == '1');
echo "<br />1 === '1' : ";
var_dump(1 === '1');
?>	
	</code></pre>
	</div>
	</div>	
	
	<h2>$_GET</h2>
	<ul>
	<li>GET방식으로 데이터를 받음</li>
	</ul>
	<div class="ex">
	<div class="code">
	<pre><code class="php">
echo $_GET['id'];
	</code></pre>
	</div>
	<div class="result">
	<pre><code class="php">
<?php 
echo $_GET['id'];
?>	
	</code></pre>
	</div>
	</div>			

	<h2>while</h2>
	<ul>
	<li>조건이 참(true)이면 중괄호 구간의 구문을 반복적으로 실행한다.</li>
	<li>조건이 거짓(false)이면 반복끝</li>
	</ul>
	<div class="ex">
	<div class="code">
	<pre><code class="php">
while($sum < 5){
	echo $sum;
	$sum++;
}
	</code></pre>
	</div>
	<div class="result">
	<pre><code class="php">
<?php 
$sum=0;
while($sum < 5){
	echo $sum;
	$sum++;
	echo "<br>";
}
?>	
	</code></pre>
	</div>
	</div>	



	<h2>for</h2>
	<ul>
	<li>반복문</li>
	</ul>
	<div class="ex">
	<div class="code">
	<pre><code class="php">
for($i=0; $i<10; $i++){
	for($j=0; $j<10; $j++){
		echo "반복: {$i}{$j}<br/>";
	}
}
	</code></pre>
	</div>
	<div class="result">
	<pre><code class="php">
<?php 
for($i=0; $i<3; $i++){
	for($j=0; $j<3; $j++){
		echo "반복: {$i}{$j}<br/>";
	}
}
?>	
	</code></pre>
	</div>
	</div>	

	<h2>배열</h2>
	<ul>
	<li>$member = </li>
	</ul>
	<div class="ex">
	<div class="code">
	<pre><code class="php">
for($i=0; $i<10; $i++){
	for($j=0; $j<10; $j++){
		echo "반복: {$i}{$j}<br/>";
	}
}
	</code></pre>
	</div>
	<div class="result">
	<pre><code class="php">
<?php 
for($i=0; $i<3; $i++){
	for($j=0; $j<3; $j++){
		echo "반복: {$i}{$j}<br/>";
	}
}
?>	
	</code></pre>
	</div>
	</div>	
			
<script>
$(document).ready(function() {
	hljs.configure({useBR: false,
		  tabReplace: '    ', // 4 spaces
		  classPrefix: ''     // don't append class prefix

		});
  $('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
  });
  
});

</script>
</body>
</html>