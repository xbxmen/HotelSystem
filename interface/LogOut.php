<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/2/22
 *     Time: 14:45	
 *
 *     接口
 * */
session_start();
header("Content-Type: text/html; charset=UTF-8");
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$con = new opDB();
if(isset($_SESSION['SchoolNum'])  && isset($_SESSION['password'])){
	$_SESSION['jibie'] = "-1";
	$_SESSION['permission'] = "1";
	$_SESSION['SchoolNum'] = " ";
	$_SESSION['password'] = " ";
	setcookie("SchoolNum","",time()-3600);
	setcookie("password","",time()-3600);
	$response['statue'] = 1;
	$con->for_close();
	echo json_encode($response);
	exit ;
}else{
	$response['statue'] = -1;
	$con->for_close();
	echo json_encode($response);
	exit ;
}

?>