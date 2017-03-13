<?php
$pid = $_GET['pid'];

mysql_connect("localhost", "root", "123456");
mysql_select_db("province&city");
mysql_query("set names utf8");
$sql = "select * from city where province_id={$pid}";
$res = mysql_query($sql);
$citys = array();
while ($row = mysql_fetch_assoc($res)) {
	$citys[] = array("id"=> $row['id'], 'name'=> $row['name']);
}
echo json_encode($citys);