<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/2/22
 *     Time: 16:37	
 *
 *     山东大学 体育馆项目  获取 管理信息接口
 * */
session_start();
header("Content-Type: text/html; charset=UTF-8");
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$jason = array();
$con = new opDB();
if(isset($_SESSION['SchoolNum'])){
	if(isset($_SESSION['jibie']) && $_SESSION['jibie'] == 1){
		$sql = "SELECT * FROM users WHERE grade=2 ";
		$result = $con->get_result($sql);
		echo json_encode($con->deal_result($result));
		exit;
	}elseif(isset($_SESSION['jibie']) && $_SESSION['jibie'] == 2){
		$SchoolNum = $_SESSION['SchoolNum'];
		$sql = "SELECT * FROM users WHERE grade=3 campus IN (SELECT campus FROM users WHERE schoolnum='$SchoolNum')";
		$result = $con -> get_result($sql);
		echo json_encode($con->deal_result($result));
		exit;
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

?>