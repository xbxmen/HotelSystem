<?php
/*
 *
 *   	宾馆管理系统  预定房间的接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['account'])){
	if(isset($_POST['account']) && $_POST['account']&& $_POST['phone']&& $_POST['roomnumber']
	   && $_POST['date']){
	   		$eid = $_POST['account'];
			$phone = $_POST['phone'];
			$roomnumber = $_POST['roomnumber'];
			$date = $_POST['date'];
			$state = 3;
			
			//房间的状态，1空2满3预定。
			$sql1 = "UPDATE room SET state = 3 WHERE roomnumber = '{$roomnumber}'";
			//预定单的状态，1已入住2已取消3预定中
			$sql2 = "insert into preserve (phone,rid,date,state,eid) values('$phone','$roomnumber','$date','$state','$eid')";
			
			$con->excute_dml($sql1);
			$con->excute_dml($sql2);
			exit;
   	}
}else{
	$response['statue'] = -1;
	$con->for_close();
	echo json_encode($response);
	exit ;
}

?>