<?php	
/*
 *
 *  宾馆管理系统  预订单取消接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();
if (isset($_POST['account']) && $_POST['account']
    && $_POST['id'] && $_POST['roomnumber']) {
	$id = $_POST['$id'];
	$roomnumber = $_POST['$roomnumber'];
	
	//房间的状态，1空2满3预定。
	$sql1 = "UPDATE room SET state = 1 WHERE roomnumber = '{$roomnumber}'";
	//预定单的状态，1已入住2已取消3预定中
	$sql2 = "update preserve set state = 2 where id = '{$id}'";

	$con->excute_dml($sql1);
	$con->excute_dml($sql2);
	exit;

}else{
	$response['statue'] = -1;
	$con->for_close();
	echo json_encode($response);
	exit ;
}

?>	