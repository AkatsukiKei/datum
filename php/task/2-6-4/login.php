<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
	header("Location:index.php");
}
if (isset($_POST['submit'])) {
	$username = trim($_POST['username']);
	$_SESSION['username'] = $username;
	switch ($_POST['expires']) {
		case "oneHour":
			setcookie(session_name(), session_id(), time()+3600);
			break;
		case "oneDay":
			setcookie(session_name(), session_id(), time()+24*3600);
			break;
		case "oneWeek":
			setcookie(session_name(), session_id(), time()+7*24*3600);
			break;
	}
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
自动登录有效期：
<input type="radio" name="expires" value="oneHour" />1小时
<input type="radio" name="expires" value="oneDay" />1天
<input type="radio" name="expires" value="oneWeek" />1周
<br/>
<input type="submit" name="submit" value="登录" />
</form>
</body>
</html>