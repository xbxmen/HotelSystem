<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/3/14
 *     Time: 21:32
 *
 *  山东大学 SESSION 验证接口
 * */
session_start(); 
header("Content-Type: text/html; charset=UTF-8");
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$con = new opDB();
$my_session = -1;
if(isset($_SESSION['SchoolNum']) && isset($_SESSION['password'])){
	$my_session = $_SESSION['jibie'];
	echo $my_session;
	exit;
}else{
	if(isset($_COOKIE['SchoolNum']) && isset($_COOKIE['password'])){
		$SchoolNum = $_COOKIE['SchoolNum'];
		$password = $_COOKIE['password'];
		$sql = "SELECT * FROM users WHERE schoolnum='{$SchoolNum}' && password='{$password}'";
		$res = $con->excute_dql($sql);
		if($row = mysqli_fetch_assoc($res)){
			$my_session = $row['jibie'];
			setSession($row['u_id'],$row['jibie'],$row['permission'],$SchoolNum,$password);
			echo $my_session;
			exit;
		}else{
			$my_session = -1;
			echo $my_session;
			exit;
		}	
	}else{
		$my_session = -1;
		echo $my_session;
		exit;
	}
}
/*
 * 设置 session
 * */
function setSession($id,$jibie,$permission,$SchoolNum,$password){
	$_SESSION['id'] = $id;
	$_SESSION['jibie'] = $jibie; 
	$_SESSION['permission'] = $permission;
	$_SESSION['SchoolNum'] = $SchoolNum;
	$_SESSION['password'] = $password;
	setcookie("SchoolNum",$SchoolNum, time()+3600);
	setcookie("passoword",$password,time()+3600);
}


?>