<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
	echo "欢迎，{$_SESSION['username']}。<a href='logout.php'>注销</a>";
}
else {
	echo "请先<a href='login.php'>登录</a>。";
}