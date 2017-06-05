<?php 
session_save_path('./session/');
session_start(); //세션 초기화
$id = 'mizu';
$pwd = 'a1472';

if(!empty($_POST['id']) && !empty($_POST['pwd'])){
	if($_POST['id'] == $id && $_POST['pwd'] == $pwd){
		$_SESSION['is_login'] = $id;
		$_SESSION['nickname'] = '미쥬';
		header('Location: ./session.php');
		exit;
	}
}
echo '로그인 하지 못했습니다.';
	
?>