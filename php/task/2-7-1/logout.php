<!--logout.php-->
<meta charset="utf-8" />
<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
	session_destroy();
	echo "<script type='text/javascript'>";
	echo "alert('注销成功！');";
	echo "location.href = 'index.php';";
	echo "</script>";

}