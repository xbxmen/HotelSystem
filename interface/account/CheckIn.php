<?php
/*
 *   	宾馆管理系统  顾客入住的接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();

if(isset($_SESSION['account'])){
	if(isset($_POST['account']) && $_POST['account']&& $_POST['phone']&& $_POST['roomnumber']
	   && $_POST['cardnumber'] && $_POST['name'] && $_POST['sex'] && $_POST['deposit']){
	   		$eid = $_POST['account'];
			$phone = $_POST['phone'];
			$roomnumber = $_POST['roomnumber'];
			$cardnumber = $_POST['cardnumber'];
			$name = $_POST['name'];
			$sex = $_POST['sex'];
			$deposit = $_POST['deposit'];
			
			//房间的状态，1空2满3预定。
			$state = 2;
			
			$sql1  = "insert into customer cardnumber,name,sex,phone,roomnumber,deposit,";
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