<?php
/*
 *     Created by 赵晓帅
 *     Date: 2016/2/22
 *     Time: 14:45	
 *
 *     接口
 * */
header("Content-Type: text/html; charset=UTF-8");
//include_once '../config/myDB.php';
//$response = array("statue" => '');
//$con = new opDB();

//  $type = "单人间";
//	$sql  = "SELECT roomnumber,type,state,price FROM room WHERE state=1 and type = '{$type}'";
//	$result = $con->get_result($sql);
	//$res = $con->deal_result($result);
	//var_dump($res);
	
	$con = mysql_connect("localhost","root","");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	  
	mysql_select_db("hotel", $con);
	mysql_query("set names 'utf8'");
	mysql_query("set charset set utf8");
	$type = "单人间";
	$sql  = "SELECT roomnumber,type,state,price FROM room WHERE state=1 and type = '{$type}'";
	$result = mysql_query($sql);

	echo "<table border='1'>
	<tr>
	<th>roomnumber</th>
	<th>type </th>
	<th>state</th>
	<th>price</th>
	</tr>";
	
	while($row = mysql_fetch_array($result))
	  {
	  echo "<tr>";
	  echo "<td>" . $row['roomnumber'] . "</td>";
	  echo "<td>" . $row['type'] . "</td>";
	  echo "<td>" . $row['state'] . "</td>";
	  echo "<td>" . $row['price'] . "</td>";
	  echo "</tr>";
	  }
	echo "</table>";
	
/*$pass = md5("123456");
$sql = "insert into admin(SchoolNum,password,UserName,campus,name,tel) values('201400301003','{$pass}','zhaoshuai','软件学院','赵帅','17865169626')";
$con->excute_dql($sql);
*/

//$destination_folder = '../../files/'
?>