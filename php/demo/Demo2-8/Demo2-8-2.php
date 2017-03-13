<?php
//连接数据库服务器
mysql_connect("localhost", "root", "123456");
//选定使用的数据库
mysql_select_db("2014-HTML5-lession");

//定义sql语句
$sql = "insert into user values(null, 'formPHPApp', '123', default, CURRENT_TIMESTAMP)";
// $sql = "select * from user";
//执行查询
$result = mysql_query($sql);
var_dump($result);