<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/9/7
 *     Time: 20:17
 *
 *  山东大学 添加 内务管理员 接口
 * */
session_start();
header("Content-Type: text/html; charset=UTF-8");
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['SchoolNum']) && isset($_SESSION['password'])){
	if(isset($_SESSION['jibie']) && $_SESSION['jibie'] == 1){
		if(isset($_POST['SchoolNum']) && $_POST['SchoolNum']
	 	  && isset($_POST['password']) && $_POST['password']){
	   		$SchoolNum = test_input($_POST['SchoolNum']);
			$password = md5(test_input($_POST['password']));
			$campus = 'zx';
			$grade = 4;
			$sql01  = "SELECT u_id FROM users WHERE schoolnum='{$SchoolNum}'";
			$res = $con->excute_dql($sql01);
			if($res == 1){
				$response['statue'] = -4;
				$con->for_close();
				echo json_encode($response);
				exit ;
			}else{
				$sql = "INSERT INTO users(schoolnum,password,campus,grade) VALUES 
					('{$SchoolNum}','{$password}','{$campus}','{$grade}')";
					$res = $con->excute_dml($sql);
					if($res == 1){
						$response['statue'] = 1;
						$con->for_close();
						echo json_encode($response);
						exit ;
					}else{
						$response['statue'] = -5;
						$con->for_close();
						echo json_encode($response);
						exit ;
					}
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
?>