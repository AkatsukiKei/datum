<!--login.php-->
<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
	header("Location:index.php");
}
if (isset($_POST['submit'])) {
	$username = trim($_POST['username']);
	$_SESSION['username'] = $username;
	$time = $_POST['time'];
	setcookie("username", $username, time()+$time);
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
	<meta charset="utf-8" />
</head>
<body>
<form action="" method="post">
用户名：
<input type="text" name="username" id="username" value="" />
<span id="errorTip"></span>
<br />
密码：
<input type="password" name="password" value="" /><br />
自动登录有效期：
<input type="radio" name="time" value="3600" checked="checked" />1小时
<input type="radio" name="time" value="86400" />1天
<input type="radio" name="time" value="604800" />1周
<br/>
<input type="submit" name="submit" id="send-request-btn" value="登录" />
</form>
</body>
<script type="text/javascript">
function getXhr() {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest();
	}
	else {
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
}
document.getElementById("username").onblur = function() {
	var xhr = getXhr();
	var loginname = document.getElementById("username").value;

	xhr.open("post", "server.php", true);

	var data = "username=" + loginname;
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4) {
			var message = "";
			if (xhr.responseText == "1") {
				message = "可用！";
			}
			else {
				message = "用户名已被注册！";
			}
			document.getElementById('errorTip').innerHTML = message;
		}
	}
	xhr.send(data);
}
</script>
</html>