<?php
/*
 *
 *   	宾馆管理系统  预定房间的接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();
$con->auto_commit();
if(isset($_SESSION['account'])){
	if( $_POST['phone'] && $_POST['roomnumber'] && $_POST['date']){
	   		$eid = $_SESSION['account'];
			$phone = $_POST['phone'];
			$roomnumber = $_POST['roomnumber'];
			$date = $_POST['date'];
			$state = 3;
			
			//房间的状态，1空2满3预定。
			$sql1 = "UPDATE room SET state = 3 WHERE roomnumber = '{$roomnumber}'";
			//预定单的状态，1取消2入住3预定中
			$sql2 = "insert into preserve (phone,rid,date,state,eid) values('$phone','$roomnumber','$date','$state','$eid')";
			
			if(	$con->excute_dml($sql1) && 	$con->excute_dml($sql2)){
				$con->my_commit();
				$response['statue'] = 1;
				$con->for_close();
				echo json_encode($response);
				exit ;
			}else{
				$con->my_rollback();
				$response['statue'] = -2;
				$con->for_close();
				echo json_encode($response);
				exit ;
			}
   	}
}else{
	$response['statue'] = -1;
	$con->for_close();
	echo json_encode($response);
	exit ;
}

?>