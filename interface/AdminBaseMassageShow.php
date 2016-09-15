<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/2/22
 *     Time: 12:21	
 *
 *  山东大学 管理员基本资料 展示接口
 * */
session_start();
header("Content-Type: text/html; charset=UTF-8");
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['SchoolNum']) && isset($_SESSION['password'])){
	$admin = $_SESSION['SchoolNum'];
	$password  = $_SESSION['password'];
	$sql = "SELECT * FROM users WHERE schoolnum='{$admin}' && password='{$password}'";
	$result = $con->get_result($sql);
	if($result != -1){
		$row = mysqli_fetch_assoc($result);
		$con->for_close();
		echo json_encode($row);
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