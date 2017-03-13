<?php
// $filename = $_GET['filename'];
$username = $_POST['username'];
//进行数据库的操作
$database = array(
	"admin",
	"test",
	"test123",
	"superuser",
	"aaa"
);
if (in_array($username, $database)) {
	echo "用户名已存在";
	// echo "0";
}
else {
	echo "用户名不存在";
	// echo "1";
}
