<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/2/22
 *     Time: 15:25	
 *
 *   	宾馆管理系统  职工添加的接口想
 * */
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['account']) && $_SESSION['jibie'] == 2){
	if(isset($_POST['account']) && $_POST['account']
	   && isset($_POST['password']) && $_POST['password']){
	   		$account = test_input($_POST['account']);
			$password = md5(test_input($_POST['password']));
			$sql01  = "SELECT id FROM employee WHERE account='{$account}'";
			$res = $con->excute_dql($sql01);
			if($res == 1){
				$response['statue'] = -3;
				$con->for_close();
				echo json_encode($response);
				exit ;
			}else{
				
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
 确保 数据安全
 * */
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>