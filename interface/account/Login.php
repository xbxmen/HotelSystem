<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/2/22
 *     Time: 11:07
 *
 *  山东大学 体育馆 管理员 登录接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '',"jibie" => "1");
$con = new opDB();
if (isset($_POST['account']) && $_POST['account']
    && isset($_POST['password']) && $_POST['password']) {
	$account = test_input($_POST['account']);
	$password = test_input($_POST['password']);
	//$password = md5($password);
	$sql = "SELECT * FROM employee WHERE account='{$account}' && password='{$password}'";
	$res = $con->get_result($sql);
	if($row = mysqli_fetch_assoc($res)){
		$response['statue'] = 1;
		$response['jibie'] = 2;
		if($row['id'] == $row['manager_id']){
			setSession($row['id'],2,$account,$password);
		}else{
			setSession($row['id'],1,$account,$password);
		}
		$con->for_close();
		echo json_encode($response);
		exit ;
	}else{
		$response['statue'] = -2;
		$con->for_close();
		echo json_encode($response);
		exit ;
	}
}else{
	$response['statue'] = -1;
	$con->for_close();
	echo json_encode($response);
	exit ;
}
/*
 * 检查 数据安全性
 * */
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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