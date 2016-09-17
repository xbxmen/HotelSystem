<?php
/*
 *   	宾馆管理系统  查看所有职工的接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();

	/*$sql  = "SELECT account,manager_id from employee";
	$res = $con->get_result($sql);
	var_dump($res);*/
	
	
if(isset($_SESSION['account'])){
	$sql  = "SELECT account,manager_id from employee";
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