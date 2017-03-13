<?php
session_start();
include "../lib/mysql_connect.php";
include "../lib/global.func.php";
// check_admin_login();
if (!isset($_GET['id']) || $_GET['id'] == '') {
	exit("bad request!");
} 
echo "<script type='text/javascript'>";
echo "alert('是否确认删除数据？');";
echo "</script>";
$id = $_GET['id'];
$sql = "delete from user where id={$_GET['id']}";
$result = mysql_query($sql);
if ($result) {
	echo "<script type='text/javascript'>";
	echo "alert('删除成功!');";
	echo "location.href='index.php'";
	echo "</script>";
}