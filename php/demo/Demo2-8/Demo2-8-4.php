<?php
//连接数据库服务器
mysql_connect("localhost", "root", "123456");
//选定使用的数据库
mysql_select_db("2014-HTML5-lession");
// $sql = "select * from user";
$sql = "update user set password='456789' where id=7";
$result = mysql_query($sql);

// $counts = mysql_affected_rows();
// var_dump($counts);

$id = mysql_insert_id();
var_dump($id);