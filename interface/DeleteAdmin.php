<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/2/22
 *     Time: 14:45	
 *
 *     接口
 * */
session_start();
header("Content-Type: text/html; charset=UTF-8");
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['SchoolNum']) && isset($_SESSION['password'])){
	$root = $_SESSION['SchoolNum'];
	if(isset($_POST['SchoolNum']) && $_POST['SchoolNum']){
		$SchoolNum = test_input($_POST['SchoolNum']);
		
		if($_SESSION['jibie'] == 1){
			$sql = "DELETE FROM users WHERE schoolnum='{$SchoolNum}'";
			$res = $con->excute_dml($sql);
			if($res == 1){
				$response['statue'] = 1;
				$con->for_close();
				echo json_encode($response);
				exit ;
			}else{
				$response['statue'] = -3;
				$con->for_close();
				echo json_encode($response);
				exit ;
			}
		}elseif($_SESSION['jibie'] == 2){
			$sql01 = "SELECT campus FROM users WHERE schoolnum='{$root}'";
			$res01 = $con->get_result($sql01);
			$row01 = mysqli_fetch_assoc($res01);
			
			$sql02 = "SELECT campus FROM users WHERE schoolnum='{$SchoolNum}'";
			$res02 = $con->get_result($sql02);
			if($row02 = mysqli_fetch_assoc($res02)){
				if($row01['campus'] == $row02['campus']){
					$sql = "DELETE FROM users WHERE schoolnum='{$SchoolNum}'";
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


//检测 数据 
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>