<?php
if (isset($_COOKIE['username']) && $_COOKIE['username'] != '') {
	setcookie("username", null, time()-100);
	echo "<script type='text/javascript'>";
	echo "alert('注销成功！');";
	echo "location.href = 'index.php';";
	echo "</script>";

}