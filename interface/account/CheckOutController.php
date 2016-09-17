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
			
			$roomnumber = $_POST['roomnumber'];
			$date = date("Y/m/d");	
			$sql1 = "SELECT * FROM room WHERE roomnumber='{$roomnumber}' and state=2";
			$res1 = $con->get_result($sql1);
			$sql2 = "SELECT * FROM customer WHERE roomnumber='$roomnumber' ORDER BY checkin desc limit 1";
			$res2 = $con->get_result($sql2);
			if($row1 = mysqli_fetch_assoc($res1) && $row2 = mysqli_fetch_assoc($res2)){
				//房间的状态，1空2满3预定。
				$sql1 = "UPDATE room SET state=1 WHERE roomnumber = '{$roomnumber}'";
				$sql2 = "update customer set checkout='$date' where id='{$row2['id']}'";
					
				if(	$con->excute_dml($sql1) == 1  && $con->excute_dml($sql2) == 1){
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