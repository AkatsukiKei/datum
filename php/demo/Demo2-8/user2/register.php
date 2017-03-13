<?php
session_start();
include "lib/mysql_connect.php";
if (isset($_SESSION['uid']) && $_SESSION['uid']!="") {
	header("Location:index.php");
}
if (isset($_POST['register'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$password = md5($password);

	if (isset($_FILES['headphoto'])) {
		$headphotoPath = "upload/".$_FILES['headphoto']['name'];
		move_uploaded_file($_FILES['headphoto']['tmp_name'], $headphotoPath);
	}
	$sql = "INSERT INTO user VALUES(null, '$username', '$password', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '$headphotoPath')";
	$result = mysql_query($sql);
	if ($result) {
		$_SESSION['uid'] = mysql_insert_id();
		$_SESSION['uname'] = $username;
		echo "<script type='text/javascript'>";
		echo "alert('注册成功!');";
		echo "location.href='index.php'";
		echo "</script>";
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
<form action="" method="post" enctype="multipart/form-data">
	用户名：<input type="text" value="" name="username" />
	<br />
	密码：<input type="password" value="" name="password" />
	<br />
	头像：<input type="file" name="headphoto" />
	<br />
	<input type="submit"  value="注册" name="register" />
</form>
</body>
</html>