<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/2/22
 *     Time: 12:21	
 *
 *  山东大学 内务 管理员 权限 管理 接口
 * */
session_start();
header("Content-Type: text/html; charset=UTF-8");
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['SchoolNum']) && isset($_SESSION['password'])){
	if(isset($_SESSION['jibie']) && $_SESSION['jibie']==1){
		if(isset($_POST['u_id']) && $_POST['u_id']
		&& isset($_POST['permission']) && $_POST['permission']){
			$u_id = test_input($_POST['u_id']);
			$permission = test_input($_POST['permission']);
			$sql = "UPDATE users SET permission='{$permission}' WHERE u_id='{$u_id}' and grade=4";
			$res = $con->excute_dml($sql);
			if($res == 1){
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
/*
 * 检查 数据安全性
 * */
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>