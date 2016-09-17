<?php
/*
 *   	宾馆管理系统  完成订单的接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();

if(isset($_SESSION['account'])){
	if(isset($_POST['pid']) && $_POST['pid']){
	   		$pid = $_POST['pid'];
			//订单的状态，1空2已入住3预定。
			$sql = "update preserve set state=2 where id='{$pid}' and state=3";
			$res = $con->excute_dml($sql);
			if($res == 1){
				$response['statue'] = 1;
			}else{
				$response['statue'] = -3;
			}
			$con->for_close();
			echo json_encode($response);
			exit ;
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