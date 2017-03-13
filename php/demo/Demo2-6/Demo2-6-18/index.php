<?php
// username --> 存储用户名
if (isset($_COOKIE['username']) && $_COOKIE['username'] != '') {
	echo "欢迎，{$_COOKIE['username']}。<a href='logout.php'>注销</a>";
}
else {
	echo "请先<a href='login.php'>登录</a>。";
}