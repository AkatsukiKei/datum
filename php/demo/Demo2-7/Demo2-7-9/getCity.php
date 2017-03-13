<?php
$pid = $_GET['pid'];

mysql_connect("localhost", "root", "123456");
mysql_select_db("2014-HTML5-lession");
mysql_query("set names utf8");
$sql = "select * from city where province_id={$pid}";
$res = mysql_query($sql);
$citys = array();
while ($row = mysql_fetch_assoc($res)) {
	 // echo "<option value='{$row['id']}'>{$row['name']}</option>";
	$citys[] = array("id"=> $row['id'], 'name'=> $row['name']);
}
echo json_encode($citys);