<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/2/22
 *     Time: 14:45	
 *
 *  山东大学 管理员 编辑个人资料接口
 * */
session_start();
header("Content-Type: text/html; charset=UTF-8");
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['SchoolNum']) && $_SESSION['SchoolNum'] ){
	if(isset($_POST['SchoolNum']) && $_POST['SchoolNum']
	   && isset($_POST['UserName']) 
	   && isset($_POST['campus']) && $_POST['campus']
	   && isset($_POST['name']) 
	   && isset($_POST['tel']) ){
		$SchoolNum = $_POST['SchoolNum'];
		$UserName = test_input($_POST['UserName']);
		$campus = $_POST['campus'];
		$name = test_input($_POST['name']);
		$tel = test_input($_POST['tel']);	
		$sql = "UPDATE users SET username='{$UserName}',name='{$name}',tel='{$tel}'
		        WHERE schoolnum='{$SchoolNum}'";
		$res = $con->excute_dml($sql);
		if($res == 1){
			$response['statue'] = 1;
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
		$response['statue'] = -3;
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

//检测 数据 
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>