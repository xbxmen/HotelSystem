<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/2/24
 *     Time: 12:34
 *
 *     山东大学 体育馆  管理员 权限  接口
 * */
header("Content-Type: text/html; charset=UTF-8");
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['SchoolNum']) && isset($_SESSION['password'])){
	if($_SESSION['SchoolNum'] == 'root'){
		$schoolnum = test_input($_POST['schoolnum'])? test_input($_POST['schoolnum']): " ";
		$mission = test_input($_POST['permisson'])? test_input($_POST['permission']): " ";
		if($schoolnum && $mission){
			$sql = "UPDATE users SET permission='{$mission}' WHERE schoolnum='{$schoolnum}' and grade=4";
			$res = $con->excute_dql($sql);
			if($res){
				$response['statue'] = 1;
				$con->for_close();
				echo json_encode($response);
				exit ;
			}else{
				$response['statue'] = -4;
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

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}