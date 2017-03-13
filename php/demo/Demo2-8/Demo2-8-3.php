<?php
//连接数据库服务器
mysql_connect("localhost", "root", "123456");
//选定使用的数据库
mysql_select_db("2014-HTML5-lession");

$sql = "select * from user";
$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) {
	var_dump($row);
}