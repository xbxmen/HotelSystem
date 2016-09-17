<?php
/*
 *   SESSION 验证接口
 * */
include_once '../config/myDB.php';
$con = new opDB();
$my_session = -1;
if(isset($_SESSION['account']) && isset($_SESSION['password'])){
	$my_session = $_SESSION['jibie'];
	echo $my_session;
	exit;
}else{
	if(isset($_COOKIE['account']) && isset($_COOKIE['password'])){
		$account = $_COOKIE['account'];
		$password = $_COOKIE['password'];
		$sql = "SELECT * FROM employee WHERE account='{$account}' && password='{$password}'";
		$res = $con->get_result($sql);
		if($row = mysqli_fetch_assoc($res)){
			if($row['id'] == $row['manager_id']){
				$my_session = 2;
			}else{
				$my_session = 1;
			}
			setSession($row['id'],$my_session,$account,$password);
			echo $my_session;
			exit;
		}else{
			$my_session = -1;
			echo $my_session;
			exit;
		}	
	}else{
		$my_session = -1;
		echo $my_session;
		exit;
	}
}
/*
 * 设置 session
 * */
function setSession($id,$jibie,$account,$password){
	$_SESSION['id'] = $id;
	$_SESSION['jibie'] = $jibie; 
	$_SESSION['account'] = $account;
	$_SESSION['password'] = $password;
	setcookie("account",$account, time()+3600);
	setcookie("passoword",$password,time()+3600);
}


?>