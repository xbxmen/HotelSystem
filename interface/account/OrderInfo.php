<?php
/*
 *   	宾馆管理系统  显示所有订单的接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();

/*	$sql  = "SELECT cname,phone,rid,type,price,preserve.state,date FROM room,preserve where roomnumber=rid";
	$res = $con->get_result($sql);
	var_dump($res);*/
	
	
if(isset($_SESSION['account'])){
	$sql  = "SELECT preserve.id as id,cname,phone,rid,type,price,preserve.state,date FROM room,preserve where roomnumber=rid";
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