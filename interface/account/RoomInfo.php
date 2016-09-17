<?php
/*
 *   	宾馆管理系统  显示所有房间的接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['account']) && $_SESSION['jibie'] == 2){
	$sql  = "SELECT * from room";
	$res = $con->get_result($sql);
	echo json_encode($con->deal_result($res));
	exit;
}else{
	$response['statue'] = -1;
	$con->for_close();
	echo json_encode($response);
	exit ;
}

?>