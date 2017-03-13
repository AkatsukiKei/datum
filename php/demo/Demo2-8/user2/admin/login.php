<?php
session_start();
include "../lib/mysql_connect.php";
if (isset($_SESSION['adminid']) && $_SESSION['adminid']!="") {
	header("Location:index.php");
}
if (isset($_POST['login'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	$sql = "SELECT * FROM admin WHERE admin='$username' and password='$password'";
	$result = mysql_query($sql);

	if ($result && mysql_num_rows($result) > 0) {
		$admin = mysql_fetch_assoc($result);
		$_SESSION['adminid'] = $admin['id'];
		echo "<script type='text/javascript'>";
		echo "alert('登录成功!');";
		echo "location.href='index.php'";
		echo "</script>";
	}
	else {
		echo "用户名或密码错误！";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>***管理系统 后台登录</h1>
	<form action="" method="post">
		用户名：<input type="text" value="" name="username" />
		<br />
		密码：<input type="password" value="" name="password" />
		<br />
		<input type="submit"  value="登录" name="login" />
	</form>
</body>
</html>