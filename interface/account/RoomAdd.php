<?php
/*
 *
 *   	宾馆管理系统  添加房间的接口
 * */
include_once '../config/myDB.php';
$response = array("statue" => '');
$con = new opDB();


			/*$roomnumber = "107";
			$type = "单人间";
			$price = "150";
			$state = 1;
			
			//房间的状态，1空2满3预定。
		    $sql1 = "insert into room (roomnumber,type,price,state) values('$roomnumber','$type','$price','$state')";
		    $con->excute_dml($sql1);*/

$con->auto_commit();
if(isset($_SESSION['account']) && $_SESSION['account']){
	if(isset($_POST['roomnumber']) && $_POST['roomnumber'] 
	&& isset($_POST['type']) && $_POST['type']
	&& isset($_POST['price']) && $_POST['price']){
		
	   		//$eid = $_SESSION['account'];
			$roomnumber = $_POST['roomnumber'];
			$type = $_POST['type'];
			$price = $_POST['price'];
			$state = 1;
			
			//房间的状态，1空2满3预定。
		    $sql1 = "insert into room (roomnumber,type,price,state) values('$roomnumber','$type','$price','$state')";

			if(	$con->excute_dml($sql1)){
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