<?php
/*
 *   	宾馆管理系统  顾客入住的接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();

if(isset($_SESSION['account'])){
	if($_POST['phone'] && $_POST['roomnumber'] && $_POST['cardnumber'] && $_POST['name'] 
	&& $_POST['sex'] && $_POST['deposit'] && $_POST['money']){
	   		$eid = $_SESSION['account'];
			$phone = $_POST['phone'];
			$roomnumber = $_POST['roomnumber'];
			$cardnumber = $_POST['cardnumber'];
			$name = $_POST['name'];
			$sex = $_POST['sex'];
			$deposit = $_POST['deposit'];
			$money = $_POST['money'];
			$checkin = date("Y/m/d");
			
			//房间的状态，1空2满3预定。
			$state = 2;
			
			$sql1  = "insert into customer (cardnumber,name,sex,phone,roomnumber,deposit,eid,checkin,money) values('$cardnumber','$name','$sex','$phone','$roomnumber','$deposit','$eid','$checkin','$money')";
			
			$sql2  = "update room set state=2 where roomnumber='{$roomnumber}'";
			
			if($con->excute_dml($sql1) == 1 && $con->excute_dml($sql2) == 1){
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