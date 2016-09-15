<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/2/22
 *     Time: 15:25	
 *
 *     山东大学 体育馆创建 管理员接口
 * */
session_start();
header("Content-Type: text/html; charset=UTF-8");
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['SchoolNum']) && isset($_SESSION['password'])){
	$root = $_SESSION['SchoolNum'];
	if(isset($_POST['SchoolNum']) && $_POST['SchoolNum']
	   && isset($_POST['password']) && $_POST['password']
	   && isset($_POST['campus']) && $_POST['campus']){
	   		$SchoolNum = test_input($_POST['SchoolNum']);
			$password = md5(test_input($_POST['password']));
			$campus = test_input($_POST['campus']);
			if($campus == 'account'){
				$grade = $_SESSION['jibie']+3;
			}else{
				$grade = $_SESSION['jibie']+1;
			}
			$sql01  = "SELECT u_id FROM users WHERE schoolnum='{$SchoolNum}'";
			$res = $con->excute_dql($sql01);
			if($res == 1){
				$response['statue'] = -5;
				$con->for_close();
				echo json_encode($response);
				exit ;
			}else{
				if($_SESSION['jibie'] == 2){
					$sql = "SELECT campus FROM users WHERE schoolnum='{$root}'";
					$res = $con -> get_result($sql);
					$row = mysqli_fetch_assoc($res);
					
					if($row['campus'] == $campus){
						$sql = "INSERT INTO users(schoolnum,password,campus,grade) VALUES 
						('{$SchoolNum}','{$password}','{$campus}','{$grade}')";
						$res = $con->excute_dml($sql);
						if($res == 1){
							$response['statue'] = 1;
							$con->for_close();
							echo json_encode($response);
							exit ;
						}else{
							$response['statue'] = -6;
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
				}elseif($_SESSION['jibie'] == 1){
					$sql = "INSERT INTO users(schoolnum,password,campus,grade) VALUES 
						('{$SchoolNum}','{$password}','{$campus}','{$grade}')";
					$res = $con->excute_dml($sql);
					if($res == 1){
						$response['statue'] = 1;
						$con->for_close();
						echo json_encode($response);
						exit ;
					}else{
						$response['statue'] = -6;
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

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>