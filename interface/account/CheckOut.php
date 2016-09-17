<?php
/*
 *
 *   	宾馆管理系统  退房的接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();
$con->auto_commit();
if(isset($_SESSION['account']) && $_SESSION['account']){//判断参数名字对不对并判断一下是否为空
	if(isset($_POST['roomnumber']) && $_POST['roomnumber'] ){
		
	   		$eid = $_SESSION['account'];
			$roomnumber = $_POST['roomnumber']；
			$state = 1;
			
			//房间的状态，1空2满3预定。
			$sql1 = "UPDATE room SET state = 1 WHERE roomnumber = '{$roomnumber}'";
			$sql2 = "update customer set ";
			
			if(	$con->excute_dml($sql1)  && $con->excute_dml($sql2)){
				$con->my_commit();
				$response['statue'] = 1;
				$con->for_close();
				echo json_encode($response);
				exit ;
			}else{
				$con->my_rollback();
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