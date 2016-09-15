<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/9/7
 *     Time: 20:17
 *
 *  山东大学 内务管理员 资料展示接口
 * */
session_start();
header("Content-Type: text/html; charset=UTF-8");
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['SchoolNum']) && isset($_SESSION['password'])){
	if(isset($_SESSION['jibie']) && $_SESSION['jibie'] == 1){
		$sql = "SELECT * FROM users WHERE grade=4";
		$result = $con->get_result($sql);
		if($result != -1){
			$row = mysqli_fetch_assoc($result);
			$con->for_close();
			echo json_encode($row);
			exit;	
		}else{
			$response['statue'] = -3;
			$con->for_close();
			echo json_encode($response);
			exit ;
		}
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