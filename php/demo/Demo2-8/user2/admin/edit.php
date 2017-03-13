<?php
session_start();
include "../lib/mysql_connect.php";
include "../lib/global.func.php";
// check_admin_login();

if (!isset($_GET['id']) || $_GET['id'] == '') {
	exit("bad request!");
}

if (isset($_POST['edit'])) {
	$username = trim($_POST['username']);
	// $password = trim($_POST['password']);
	// $password = md5($password);
	$id = $_POST['id'];
	if (isset($_FILES['headphoto'])) {
		$headphotoPath = "../upload/".$_FILES['headphoto']['name'];
		move_uploaded_file($_FILES['headphoto']['tmp_name'], $headphotoPath);
		$sql = "UPDATE user SET username='$username',head_photo='$headphotoPath' WHERE id=$id";
	}
	else{
		$sql = "UPDATE user SET username='$username' WHERE id=$id";
	}
	$result = mysql_query($sql);
	if ($result) {
		echo "<script type='text/javascript'>";
		echo "alert('修改成功!');";
		echo "location.href='index.php'";
		echo "</script>";
	}
}
else {
	$sql = "select * from user where id={$_GET['id']}";
	$result = mysql_query($sql);
	if ($result != false && mysql_num_rows($result) == 1) {
		$user = mysql_fetch_assoc($result);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>编辑用户信息</h1>
<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
	头像：<img src="<?php echo '../'.$user['head_photo']; ?>" width = "160px" height="200px"/>
	<br />
	修改头像：<input type="file" name="headphoto" />
	<br/>
	用户名：<input type="text" name="username" value="<?php echo $user['username']; ?>"/>
	<br />

	<!--
	密码：<input type="password" name="password" value="<?php echo $user['password']; ?>" />
	<br />
	-->
	<input type="submit" value="修改" name="edit" />
</form>
</body>
</html>