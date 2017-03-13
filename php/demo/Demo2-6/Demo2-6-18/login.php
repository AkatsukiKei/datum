<?php
if (isset($_COOKIE['username']) && $_COOKIE['username'] != '') {
	header("Location:index.php");
}
if (isset($_POST['submit'])) {
	$username = trim($_POST['username']);
	setcookie("username", $username);
	echo "<script type='text/javascript'>";
	echo "alert('登录成功！');";
	echo "location.href = 'index.php';";
	echo "</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
用户名：<input type="text" name="username" value="" /><br />
密码：<input type="password" name="password" value="" /><br />
<input type="submit" name="submit" value="登录" />
</form>
</body>
</html>