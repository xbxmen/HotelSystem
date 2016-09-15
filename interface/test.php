<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/2/22
 *     Time: 14:45	
 *
 *     接口
 * */
header("Content-Type: text/html; charset=UTF-8");
include_once '../mysqli/opDB.class.php';
$response = array("statue" => '');
$con = new opDB();
/*$pass = md5("123456");
$sql = "insert into admin(SchoolNum,password,UserName,campus,name,tel) values('201400301003','{$pass}','zhaoshuai','软件学院','赵帅','17865169626')";
$con->excute_dql($sql);
*/

$destination_folder = '../../files/'
?>