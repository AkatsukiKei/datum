<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if (isset($_SESSION['uid']) && $_SESSION['uid']!="") {
	echo "欢迎：" . $_SESSION['uname'] . "<a href='logout.php'>退出</a>";
}
else {
	echo "未登录，<a href='register.php'>注册</a>&nbsp;&nbsp;";
	echo "<a href='login.php'>登录</a>";
}
?>
</body>
</html>