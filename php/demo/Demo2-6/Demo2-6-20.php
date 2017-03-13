<?php
if (isset($_POST['submit'])) {
	if (isset($_POST['rememberme']) && $_POST['rememberme'] == "true") {
		setcookie("usernameInForm", $_POST['user']);
	}
	else {
		setcookie("usernameInForm", '', time()-100);	
	}
}
$usernameInForm = isset($_COOKIE['usernameInForm']) ? $_COOKIE['usernameInForm'] : '';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<form action="" method="post">
	<tr>
		<td>用户名</td>
		<td><input type="text" name="user" value="<?php echo $usernameInForm;?>" /></td>
	</tr>
	<tr>
		<td>密码</td>
		<td><input type="password" name="pwd" value="" /></td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="checkbox" name="rememberme" value="true" />
			记住用户名
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="登录" /></td>
	</tr>
	</form>
</table>
</body>
</html>