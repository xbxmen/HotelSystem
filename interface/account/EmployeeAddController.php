<?php
/*
 *   	宾馆管理系统  职工添加的接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['account']) && $_SESSION['jibie'] == 2){
	if(isset($_POST['account']) && $_POST['account']
	   && isset($_POST['password']) && $_POST['password']){
	   		$account = $_POST['account'];
			$password = $_POST['password'];
			$manager_id = 1;
			$sql  = "SELECT id FROM employee WHERE account='{$account}'";
			$res = $con->excute_dql($sql);
			if($res == 1){
				$response['statue'] = -3;
				$con->for_close();
				echo json_encode($response);
				exit ;
			}else{
				$sql ="INSERT INTO employee(account,password,manager_id) VALUES('$account','$password','$manager_id')";
				$response['statue'] = $con->excute_dml($sql);
				$con->for_close();
				echo json_encode($response);
				exit;
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