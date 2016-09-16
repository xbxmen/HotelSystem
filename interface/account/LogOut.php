<?php
/*
 *  宾馆 管理系统   接口
 * */
session_start();
header("Content-Type: text/html; charset=UTF-8");
$response = array("statue" => '');
if(isset($_SESSION['account']) && isset($_SESSION['password'])){
	$_SESSION['jibie'] = "-1";
	$_SESSION['account'] = " ";
	$_SESSION['password'] = " ";
	setcookie("account","",time()-3600);
	setcookie("password","",time()-3600);
	$response['statue'] = 1;
	echo json_encode($response);
	exit ;
}else{
	$response['statue'] = -1;
	$con->for_close();
	echo json_encode($response);
	exit ;
}

?>