<?php
if (isset($_POST['login'])) {
	var_dump($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>用户注册</title>
</head>
<body>
<h1>用户注册</h1>
<form action="" method="post">
	<table>
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="username" value=""></td>
		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="password" name="password" value=""></td>
		</tr>
		<tr>
			<td>确认密码：</td>
			<td><input type="password" name="repwd" value=""></td>
		</tr>
		<tr>
			<td>性别：</td>
			<td>
				<input type="radio" name="gender" value="male" checked="checked">男
				<input type="radio" name="gender" value="famale">女
			</td>
		</tr>
		<tr>
			<td>出生日期：</td>
			<td>
				<select name="year">
					<option value="1988">1988</option>
					<option value="1989">1989</option>
					<option value="1990" selected="selected">1990</option>
					<option value="1991">1991</option>
					<option value="1992">1992</option>
					<option value="1993">1993</option>
					<option value="1994">1994</option>
					<option value="1995">1995</option>
					<option value="1996">1996</option>
					<option value="1997">1997</option>
				</select>
				<select name="month">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>			
					<option value="12">12</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>订阅信息：</td>
			<td>
				<input type="checkbox" name="subscribe[]" value="discount" checked="checked">优惠信息
				<input type="checkbox" name="subscribe[]" value="bill" checked="checked">每月账单
				<input type="checkbox" name="subscribe[]" value="recommend" checked="checked">推荐关注
			</td>
		</tr>	
		<tr>
			<td></td>
			<td>
				<input type="submit" name="login" value="登录" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>
