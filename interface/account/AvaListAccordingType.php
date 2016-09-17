<?php
/*
 *   	宾馆管理系统 根据类型获取可入住房间的接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();

if(isset($_SESSION['account'] && isset($_POST['type']) && $_POST['type'])){
	
	$type = $_POST['type'];
	
	$sql  = "SELECT * FROM room WHERE state=1 and type = '{$type}'";
	$res = $con->get_result($sql);
	echo json_encode($con->deal_result($res));
	$con->for_close();
	exit;
}else{
	$response['statue'] = -1;
	$con->for_close();
	echo json_encode($response);
	exit ;
}
?>



