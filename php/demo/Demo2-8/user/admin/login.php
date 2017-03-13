<?php
session_start();
$_SESSION['adminid'] = 1;
if (isset($_SESSION['adminid']) && $_SESSION['adminid']!="") {
	header("Location:index.php");
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