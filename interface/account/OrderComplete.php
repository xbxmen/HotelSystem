<?php
/*
 *   	宾馆管理系统  完成订单的接口
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
			$Date = date("Y/m/d");
			
			//房间的状态，1空2满3预定。
			$state = 2;
			
			$sql1  = "insert into customer (cardnumber,name,sex,phone,roomnumber,deposit,eid,checkin) values('$cardnumber','$name','$sex','$phone','$roomnumber','$deposit','$eid','$Date')";
			$sql2 = "update room set state=2 where roomnumber = '{$roomnumber}'";
			
			$con->excute_dml($sql1);
			$con->excute_dml($sql2);
			
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