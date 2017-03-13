<?php
session_start();
include "../lib/mysql_connect.php";
/*if (!isset($_GET['id']) || $_GET['id'] = '') {
	exit("bad request!");
}*/
// var_dump($_GET['id']);
$sql = "select * from user where id = {$_GET['id']}";
$result = mysql_query($sql);

if ($result != false && mysql_num_rows($result)) {
	$user = mysql_fetch_assoc($result);
}

if (isset($_POST['edit'])) {
	$username = trim($_POST['username']);
	$password =  trim($_POST['password']);
	$password = md5($password);
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
	用户名：<input type="text" name="username" value="<?php echo $user['username'];?>" />
	<br/>
	<!-- 密码：<input type="password" name="password" value="<?php //echo $user['password'];?>"/>
	<br/> -->
	<input type="submit" value="修改" name="edit" />
</form>
</body>
</html>