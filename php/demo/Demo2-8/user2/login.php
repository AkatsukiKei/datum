<?php
session_start();
include "lib/mysql_connect.php";
if (isset($_SESSION['uid']) && $_SESSION['uid']!="") {
	header("Location:index.php");
}
if (isset($_POST['login'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$password = md5($password);

	$sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
	$result = mysql_query($sql);
	if ($result != false) {
		if (mysql_num_rows($result) > 0) {
			$user = mysql_fetch_assoc($result);
			$_SESSION['uid'] = $user['id'];
			$_SESSION['uname'] = $user['username'];
			echo "<script type='text/javascript'>";
			echo "alert('登录成功!');";
			echo "location.href='index.php'";
			echo "</script>";
		}
		else {
			//用户名、密码错误
			echo "用户名或密码错误！";
		}
	}
	else {
		echo mysql_error();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	用户名：<input type="text" value="" name="username" />
	<br />
	密码：<input type="password" value="" name="password" />
	<br />
	<input type="submit"  value="登录" name="login" />
</form>
</body>
</html>